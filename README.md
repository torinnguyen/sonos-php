sonos-PHP-class
=================

A PHP class to control Sonos products

How to use
==========

See index.php for basic interaction with Sonos class.

Text-to-speech: 
* http://your_server_ip_address/tts.php?message=hello
* http://your_server_ip_address/tts.php?message=hello&volume=23


Setup
==========

* Place all the files on a local webserver (Raspberry Pi)
* Setup a Samba share for parent folder containing 'audio' folder with this guide http://raspberrypihq.com/how-to-share-a-folder-with-a-windows-computer-from-a-raspberry-pi/
* Add the network share to your Sonos Controller app
* Edit the tts.php with your Sonos IP and Samba share path
* Place the Voice RSS Api key on the Key Variable
* Run the tts.php from your local webserver

TODO
==========

Implementation with voicerss API instead of Google Translate API
https://gitlab.com/J.Tocino/sonos-tts/tree/master


Methods
==========

* static get_room_coordinator(string room_name) : Returns an instance of SonosPHPController representing the 'coordinator' of the specified room
* static detect(string ip,string port) : IP and port are optional. Returns an array of instances of SonosPHPController, one for each Sonos device found on the network
* get_coordinator() : Returns an instance of SonosPHPController representing the 'coordinator' of the room this device is in
* device_info() : Gets some info about this device as an array
* AddSpotifyToQueue(string spotify_id,bool next) : Adds the provided spotify ID to the queue either next or at the end
* Play() : play
* Pause() : pause
* Stop() : stop
* Next() : next track
* Previous() : previous track
* SeekTime(string) : seek to time xx:xx:xx
* ChangeTrack(int) : change to track xx
* RestartTrack() : restart actual track
* RestartQueue() : restart queue
* GetVolume() : get volume level
* SetVolume(int) : set volume level
* GetMute() : get mute status
* SetMute(bool) : active-disable mute
* GetTransportInfo() : get status about player
* GetMediaInfo() : get informations about media
* GetPositionInfo() : get some informations about track
* AddURIToQueue(string,bool) : add a track to queue
* RemoveTrackFromQueue(int) : remove a track from Queue
* RemoveAllTracksFromQueue() : remove all tracks from queue
* RefreshShareIndex() : refresh music library
* SetQueue(string) : load a track or radio in player
* PlayTTS(string message,string station,int volume,string lang) : play a text-to-speech message
