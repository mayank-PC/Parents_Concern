
<!--<link href="style/style.css" rel="stylesheet" type="text/css" media="all" />
<div id="divToUpdate"> 
    	<?php echo $_GET['id']; ?>
     
		<div id="popup_content"> 
            <p>
            Donec eu libero sit amet quam egestas semper. Aenean ultricies mi 
            vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, 
            commodo Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
        
        </div> 
    </div>-->
<style>
	.popup_box {
        display:none;
        position:fixed;  
        _position:absolute;     
         width:400;
        height:200;
        background:#FFFFFF;  
        left: 3.5%;
        top: 20%;
        z-index:100; 
        margin-left: 15px; 
        padding:15px;   
        -moz-box-shadow: 0 0 5px #ff0000;
        -webkit-box-shadow: 0 0 5px #ff0000;
        box-shadow: 0 0 5px grey;

    }

    .popupBoxClose {
        width:116px;
        height:116px;
        right:9px;  
        top:5px;  
        position:absolute;    
        cursor:pointer; 
        background: url(close.png) no-repeat;   
    }


	</style>
	<script type="text/JavaScript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	<script type="text/JavaScript">
	function loadPopupBox(data) {
    $('.popup_box').fadeIn('fast');
    $('.popup_box .ajax_content').html(data);
    $('#wrapper').css({'opacity': '0.3'});    //div with id wrapper is page's main wrapper
}
function unloadPopupBox() {
    $('.popup_box').fadeOut('fast');
    $('#wrapper').css({
        'opacity': '1'
    });
}

function cpopup() {

	 $.ajax({
        type: "POST",
        dataType: "html",
        url: "http://parent_concern/data.php",
        
        success: function(data)
        {
            loadPopupBox(data);
           //hide loading animations or something if it used
        }
    });
    $('.popupBoxClose,#wrapper').click(function() {
        unloadPopupBox();
    });

}



$.ajax({
type: "POST",
url: url,
data: data,
success: success,
dataType: dataType
});


    </script>

	<div class="popup_box">
     <div class="ajax_content"></div>
     <a class="popupBoxClose"></a>  
   </div>
   
	<input type="button"  onclick="loadPopupBox(this.value)" value="click">
	<input type="button"  onclick="cpopup()" value="close">