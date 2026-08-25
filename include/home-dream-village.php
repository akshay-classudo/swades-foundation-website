<div class="village-section">
  <div class="container">
    <div class="heading-hd text-center">
      <h2><?= htmlspecialchars($cmsDreamVillageTitle ?? 'Swades Dream Village', ENT_QUOTES, 'UTF-8') ?></h2>
      <p><?= htmlspecialchars($cmsDreamVillageIntro ?? '', ENT_QUOTES, 'UTF-8') ?></p>
    </div><!--heading-hd-->
    
    <div class="center-block mobileblock">
      <div class="videocover2">
        <video id="myvideo2" autoplay muted loop playsinline>
          <source src="./assets/videos/dreamvillage.mp4" type="video/mp4">
        </video>
      </div>
      <div class="caption">
        <h5>250+ Swades dream <br> villages celebrated</h5>
      </div>
    </div>
    <div class="layout">
      <div class="left-column">
        <div class="feature">
          <div class="feature-cion">
            <img src="./assets/images/swacch-clean.svg" alt="">
          </div>
          <div class="feature-cnt leftvector1">
            <h3>swacch (Clean)</h3>
            <p>Each house has a toilet, drainage system, follows waste segregation and disposal practices and has access to clean drinking water through a tap at home. Village is ODF</p>
          </div>
        </div><!---feature-->
        <div class="feature swades-sundar">
          <div class="feature-cion">
            <img src="./assets/images/sundar-beautiful.svg" alt="">
          </div>
          <div class="feature-cnt leftvector2">
            <h3>sundar (beautiful)</h3>
            <p>The village has good internal roads, painted homes and adequate solar street-lights, making communities feel safe
            </p>
          </div>
        </div><!---feature-->
        
        <div class="feature sundar">
          <div class="feature-cion">
            <img src="./assets/images/swasth-healthy.svg" alt="">
          </div>
          <div class="feature-cnt leftvector3">
            <h3>swasth (healthy)</h3>
            <p>The village has access to primary healthcare, institutional delivery and knowledge and access to vaccination</p>
          </div>
        </div><!---feature-->
      </div>
      
      <div class="center-block">
        <div class="videocover2">
          <video id="myvideo2" autoplay muted loop playsinline>
            <source src="./assets/videos/dreamvillage.mp4" type="video/mp4">
          </video>
        </div>
        <div class="caption">
          <h5>250+ Swades dream <br> villages celebrated</h5>
        </div>
      </div>
      
      <div class="right-column">
        <div class="feature">
          <div class="feature-cion">
            <img src="./assets/images/sakshar-literate.svg" alt="">
          </div>
          <div class="feature-cnt rightvector1">
            <h3>sakshar (literate)</h3>
            <p>Schools are places of joyful learning, with proper WASH facilities so that no child, especially no girl, drops out</p>
          </div>
        </div><!---feature-->
        
        <div class="feature prosper">
          <div class="feature-cion">
            <img src="./assets/images/samruddh-prosper.svg" alt="">
          </div>
          <div class="feature-cnt ">
            <h3>samruddh (prosper)</h3>
            <p>Each household is able to make a dignified living with multiple sources of livelihood</p>
          </div>
        </div><!---feature-->
        <div class="feature climate">
          <div class="feature-cion">
            <img src="./assets/images/shristi-climate.svg" alt="">
          </div>
          <div class="feature-cnt rightvector2">
            <h3>Shristi (Climate)</h3>
            <p>Each village embraces climate-conscious living through efforts in waste management, solar energy adoption, soil and water conservation, regenerative farming, and tree plantation.</p>
          </div>
        </div><!---feature-->
      </div>
    </div>
    <div class="know-more">
      <a href="<?= htmlspecialchars($cmsDreamVillageKnowMore ?? 'dreamvillage', ENT_QUOTES, 'UTF-8') ?>" class="btn"><?= htmlspecialchars($cmsDreamVillageKnowMoreLabel ?? 'Know More', ENT_QUOTES, 'UTF-8') ?></a>
    </div>
  </div>
</div><!---village-section-->
