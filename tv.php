<?php
include('header.php');
?>

<style>
.video{
  height: 100%;
  width: 100%;
}
   

</style>

<?php
   $api_key = 'AIzaSyBl0g_u4abY6OG2p1BXjiU2iTkFOnSwpqg';
   $channel_id = 'UC0cMoHoIth98CTusXupc5gw';
   $url = 'https://www.googleapis.com/youtube/v3/search?key='.$api_key.'&channelId='.$channel_id.'&part=snippet,id&order=date';

   $videos = file_get_contents($url);
?>


<div class="container">

      <div class="row">
          <div class="text-center">
            <h2 class="fw-bold text-dark my-4">Catch us Live</h2>
          </div>
          <hr>
        </div>
        <?php // if(!empty($videos)){   $videos_arr = json_decode($videos, true); ?>
          <?php // if(!empty($videos_arr['items'])){  ?>
            <?php   //foreach($videos_arr['items'] as $vids){ ?>
              
        <div class="row my-4">

        <?php  //if($vids['id']['kind'] == 'youtube#video'){  ?>
           <!-- <div class="col-lg-4 col-md-6 col-sm-12 my-2 vid">
              
           </div> -->
           <iframe width="560" height="315" src="https://www.youtube.com/embed/yjhqiZ-cJ4A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       
        </div>
       
</div>






<?php 
  include('footer.php');
?>