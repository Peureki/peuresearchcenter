class Event{
	constructor(intialSpawnTime, respawnTime){
		this.intialSpawnTime = intialSpawnTime;
		this.respawnTime = respawnTime;
	}
	getInitialSpawnTime(){
		return this.intialSpawnTime; 
	}
	getRespawnTime(){
		return this.respawnTime;
	}
}

var auricEvent = new Event(570, 570); 
console.log(auricEvent);