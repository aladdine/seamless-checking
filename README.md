# Seamless Checking (winning app at Levi's IoT hackathon 2015 )
This event checking app uses image recognition API Face++ 

# User case
Users are asked to upoload a few seconds video when they signup for an event. The video is then sliced to several images to train the Fae++ image recognition API. When the user arrives at the venue, there will be a camera at the door which takes a picture of the user, sends it to Face++ API and see whether the person at the door matches the person who registered. This means that users do not have to checkin manually anymore.

On top of this, the image recognition API is used to survey whether users were smiling or not when they entered the venue. This can be used as a measure of users excitement about the event.
