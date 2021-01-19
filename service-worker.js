'use strict';

self.addEventListener('push', function(event) {
    console.log('receie=ved push ')
  if(event.data){
    const message = event.data.json();
    const form =  new FormData();
    form.append('notificationid',message.notificationid);
    form.append('subscriptionid',message.subscriptionid);
    fetch(`index.php?route=custom/push_notification/recieved`,{ method : 'POST',body : form });
    console.log(message,event.data.json());
    event.waitUntil(self.registration.showNotification(message.title,{data : message ,body : message.message,icon : "images/icon.png", image : message.image,vibrate : [300, 100, 400] }));
  }
});

self.addEventListener('notificationclick', function(event) {
  console.log('[Service Worker] Notification click Received.',event);
  
  event.notification.close();
  
  if(event.notification.data){
    const message = event.notification.data;
    
    const form =  new FormData();
    form.append('notificationid',message.notificationid);
    form.append('subscriptionid',message.subscriptionid);
    fetch(`index.php?route=custom/push_notification/tapped`,{ method : 'POST',body : form });
    console.log(message,event.data,message.url);
    event.waitUntil( event.target.clients.openWindow(message.url));
  }
})