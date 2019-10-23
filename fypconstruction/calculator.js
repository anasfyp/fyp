function calculateTile() {

 var room_width = parseInt(document.getElementById('roomWidth').value);
 var room_height = parseInt(document.getElementById('roomHeight').value);
 var total_room_area = room_width * room_height;
 // calculate title size
 var tile_width = parseInt(document.getElementById('tileWidth').value);
 var tile_height = parseInt(document.getElementById('tileHeight').value);
 var total_tile_area = tile_width * tile_height;
 total_tile_area = total_tile_area * 0.00107639;
 // for no of tiles
 var no_of_tiles = total_room_area/total_tile_area;
 no_of_tiles = Math.round(no_of_tiles);
 // for cutting purpose
 var cutting_purpose = no_of_tiles*0.1;
 cutting_puspose = Math.round(cutting_purpose);
 
 // results

 document.getElementById('result').innerHTML = " "+no_of_tiles;
 document.getElementById('cutting').innerHTML = " "+cutting_puspose;
}

function steelSlab(){
	var room_length = parseInt(document.getElementById('slabLength').value);
	
	var room_bright  = parseInt(document.getElementById('slabBrigth').value);

	// var diameter = parseInt(document.getElementById('diameter').value);
	var distance = parseInt(document.getElementById('distance').value);

	distance = distance/1000;

	var mb_no = (room_length/distance)+1;

	var db_no = (room_bright/distance)+1;
    

	var dbs_length = db_no*room_length;
    var mbs_length = mb_no*room_bright;
    
    total_length = dbs_length + mbs_length;
    document.getElementById('total-area').innerHTML = " "+total_length;
    document.getElementById('main-bar').innerHTML = " "+mbs_length;
    document.getElementById('distribution-bar').innerHTML = " "+dbs_length;

}

function steelCalculation(){
	
	 var Length= parseInt(document.getElementById('length').value);
	 var Steel= parseInt(document.getElementById('no-of-steel').value);
	 var Diameter= parseInt(document.getElementById('diameter-of-steel').value);

	 
	var imp=(Diameter*Diameter)/162;
	var imp1=Length/3.28;



	var imp2=imp1*4;
	var imp3=imp*imp2;

	document.getElementById('result').innerHTML = imp3;
} 

function concreteblockcalculator(){
	var Length1= parseInt(document.getElementById('width-room1').value);
	var Length2= parseInt(document.getElementById('width-room2').value);
	var width= parseInt(document.getElementById('height-room').value);
	var oLength= parseInt(document.getElementById('opening-width').value);
	var owidth= parseInt(document.getElementById('opening-height').value);
    var blocksize=parseInt(document.getElementById('size-of-block').value);
	
	var blocksizearea=blocksize/144;
	 
	 
	var areaofroom=(Length1*2)+(Length2*2)*width;

	var openarea=oLength*owidth;



	var currentarea=areaofroom-openarea;


	var numOfBlocks=currentarea*blocksizearea;

	document.getElementById('form-result').innerHTML = numOfBlocks;
}





function paint()
{

var Length1= parseInt(document.getElementById('width-room1').value);
var Length2= parseInt(document.getElementById('width-room2').value);
var width= parseInt(document.getElementById('height-room').value);

var roomLength1= parseInt(document.getElementById('width-room1').value);
var roomwidth= parseInt(document.getElementById('width-room2').value);


var openLength1= parseInt(document.getElementById('width-room1').value);
var openwidth= parseInt(document.getElementById('width-room2').value);


	
	var areaofroom=(Length1*2)+(Length2*2)*width;

var areaofroof=roomLength1*roomwidth;

var opening=openLength1*openwidth;

var surfaceares=(areaofroom+areaofroof)-opening;


var paintnewwall=surfaceares*0.0189;
var repaint=surfaceares*0.0108;


}