  <?php

  $grille[0]=array(rand(0,1),rand(0,1));
  $grille[1]=array(rand(0,1),rand(0,1));
$tours=0;
  function generateurligneUn() {
    global $grille;
    for($i=0;$i<6;$i++){
      if ($grille[0][$i]==$grille[0][$i+1] && $grille[0][$i]==0){
        $grille[0][$i+2]=1;
      }
        elseif ($grille[0][$i]==$grille[0][$i+1] && $grille[0][$i]==1){
          $grille[0][$i+2]=0;
        } else{$grille[0][$i+2]=rand(0,1);}

      }
  }
  function generateurcolUn() {
      global $grille;
      for($i=1;$i<7;$i++){
        if ($grille[$i-1][0]==$grille[$i][0] && $grille[$i][0]==0){
          $grille[$i+1][0]=1;
        }
          elseif ($grille[$i-1][0]==$grille[$i][0] && $grille[$i][0]==1){
            $grille[$i+1][0]=0;
          } else{$grille[$i+1][0]=rand(0,1);}

        }
    }
    function generateurligneDeux() {
      global $grille;
      for($i=0;$i<6;$i++){
        if ($grille[1][$i]==$grille[1][$i+1] && $grille[1][$i]==0){
          $grille[1][$i+2]=1;
        }
          elseif ($grille[1][$i]==$grille[1][$i+1] && $grille[1][$i]==1){
            $grille[1][$i+2]=0;
          } else{$grille[1][$i+2]=rand(0,1);}

        }
    }
    function generateurcolDeux() {
        global $grille;
        for($i=1;$i<7;$i++){
          if ($grille[$i-1][1]==$grille[$i][1] && $grille[$i][1]==0){
            $grille[$i+1][1]=1;
          }
            elseif ($grille[$i-1][1]==$grille[$i][1] && $grille[$i][1]==1){
              $grille[$i+1][1]=0;
            } else{$grille[$i+1][1]=rand(0,1);}

          }
      }
      function generateurligneTrois() {
        global $grille;
        for($i=0;$i<6;$i++){
          if ($grille[2][$i]==$grille[2][$i+1] && $grille[2][$i]==0){
            $grille[2][$i+2]=1;
          }
            elseif ($grille[2][$i]==$grille[2][$i+1] && $grille[2][$i]==1){
              $grille[2][$i+2]=0;
            } else{$grille[2][$i+2]=rand(0,1);}

          }
      }
      function generateurcolTrois() {
          global $grille;
          for($i=1;$i<7;$i++){
            if ($grille[$i-1][2]==$grille[$i][2] && $grille[$i][2]==0){
              $grille[$i+1][2]=1;
            }
              elseif ($grille[$i-1][2]==$grille[$i][2] && $grille[$i][2]==1){
                $grille[$i+1][2]=0;
              } else{$grille[$i+1][2]=rand(0,1);}

            }
        }
        function generateurligneQuatre() {
          global $grille;
          for($i=0;$i<6;$i++){
            if ($grille[3][$i]==$grille[3][$i+1] && $grille[3][$i]==0){
              $grille[3][$i+2]=1;
            }
              elseif ($grille[3][$i]==$grille[3][$i+1] && $grille[3][$i]==1){
                $grille[3][$i+2]=0;
              } else{$grille[3][$i+2]=rand(0,1);}

            }
        }
        function generateurcolQuatre() {
            global $grille;
            for($i=1;$i<7;$i++){
              if ($grille[$i-1][3]==$grille[$i][3] && $grille[$i][3]==0){
                $grille[$i+1][3]=1;
              }
                elseif ($grille[$i-1][3]==$grille[$i][3] && $grille[$i][3]==1){
                  $grille[$i+1][3]=0;
                } else{$grille[$i+1][3]=rand(0,1);}

              }
          }
          function generateurligneCinq() {
            global $grille;
            for($i=0;$i<6;$i++){
              if ($grille[4][$i]==$grille[4][$i+1] && $grille[4][$i]==0){
                $grille[4][$i+2]=1;
              }
                elseif ($grille[4][$i]==$grille[4][$i+1] && $grille[4][$i]==1){
                  $grille[4][$i+2]=0;
                } else{$grille[4][$i+2]=rand(0,1);}

              }
          }
          function generateurcolCinq() {
              global $grille;
              for($i=1;$i<7;$i++){
                if ($grille[$i-1][4]==$grille[$i][4] && $grille[$i][4]==0){
                  $grille[$i+1][4]=1;
                }
                  elseif ($grille[$i-1][4]==$grille[$i][4] && $grille[$i][4]==1){
                    $grille[$i+1][4]=0;
                  } else{$grille[$i+1][4]=rand(0,1);}

                }
            }
            function generateurligneSix() {
              global $grille;
              for($i=0;$i<6;$i++){
                if ($grille[5][$i]==$grille[5][$i+1] && $grille[5][$i]==0){
                  $grille[5][$i+2]=1;
                }
                  elseif ($grille[5][$i]==$grille[5][$i+1] && $grille[5][$i]==1){
                    $grille[5][$i+2]=0;
                  } else{$grille[5][$i+2]=rand(0,1);}

                }
            }
            function generateurcolSix() {
                global $grille;
                for($i=1;$i<7;$i++){
                  if ($grille[$i-1][5]==$grille[$i][5] && $grille[$i][5]==0){
                    $grille[$i+1][5]=1;
                  }
                    elseif ($grille[$i-1][5]==$grille[$i][5] && $grille[$i][5]==1){
                      $grille[$i+1][5]=0;
                    } else{$grille[$i+1][5]=rand(0,1);}

                  }
              }
              function generateurligneSept() {
                global $grille;
                for($i=0;$i<6;$i++){
                  if ($grille[6][$i]==$grille[6][$i+1] && $grille[6][$i]==0){
                    $grille[6][$i+2]=1;
                  }
                    elseif ($grille[6][$i]==$grille[6][$i+1] && $grille[6][$i]==1){
                      $grille[6][$i+2]=0;
                    } else{$grille[6][$i+2]=rand(0,1);}

                  }
              }
              function generateurcolSept() {
                  global $grille;
                  for($i=1;$i<7;$i++){
                    if ($grille[$i-1][6]==$grille[$i][6] && $grille[$i][6]==0){
                      $grille[$i+1][6]=1;
                    }
                      elseif ($grille[$i-1][6]==$grille[$i][6] && $grille[$i][6]==1){
                        $grille[$i+1][6]=0;
                      } else{$grille[$i+1][6]=rand(0,1);}

                    }
                }
                function generateurligneHuit() {
                  global $grille;
                  for($i=0;$i<6;$i++){
                    if ($grille[7][$i]==$grille[7][$i+1] && $grille[7][$i]==0){
                      $grille[7][$i+2]=1;
                    }
                      elseif ($grille[7][$i]==$grille[7][$i+1] && $grille[7][$i]==1){
                        $grille[7][$i+2]=0;
                      } else{$grille[7][$i+2]=rand(0,1);}

                    }
                }


generateurligneUn();
generateurcolUn();
generateurligneDeux();
generateurcolDeux();
generateurligneTrois();
generateurcolTrois();
generateurligneQuatre();
generateurcolQuatre();
generateurligneCinq();
generateurcolCinq();
generateurligneSix();
generateurcolSix();
generateurligneSept();
generateurcolSept();
generateurligneHuit();

$sommeligUn = $grille[0][0]+$grille[0][1]+$grille[0][2]+$grille[0][3]+$grille[0][4]+$grille[0][5]+$grille[0][6]+$grille[0][7];
while($sommeligUn!=4){
      generateurligneUn();
      $sommeligUn = $grille[0][0]+$grille[0][1]+$grille[0][2]+$grille[0][3]+$grille[0][4]+$grille[0][5]+$grille[0][6]+$grille[0][7];
$tours++;}

$sommecolUn = $grille[0][0]+$grille[1][0]+$grille[2][0]+$grille[3][0]+$grille[4][0]+$grille[5][0]+$grille[6][0]+$grille[7][0];
while($sommecolUn!=4){
      generateurcolUn();
      $sommecolUn = $grille[0][0]+$grille[1][0]+$grille[2][0]+$grille[3][0]+$grille[4][0]+$grille[5][0]+$grille[6][0]+$grille[7][0];
$tours++;}

$sommeligDeDeux = $grille[1][0]+$grille[1][1]+$grille[1][2]+$grille[1][3]+$grille[1][4]+$grille[1][5]+$grille[1][6]+$grille[1][7];
while($sommeligDeux!=4){
      generateurligneDeux();
      $sommeligDeux = $grille[1][0]+$grille[1][1]+$grille[1][2]+$grille[1][3]+$grille[1][4]+$grille[1][5]+$grille[1][6]+$grille[1][7];
$tours++;}
$sommecolDeux = $grille[0][1]+$grille[1][1]+$grille[2][1]+$grille[3][1]+$grille[4][1]+$grille[5][1]+$grille[6][1]+$grille[7][1];
while($sommecolDeux!=4){
      generateurcolDeux();
      $sommecolDeux = $grille[0][1]+$grille[1][1]+$grille[2][1]+$grille[3][1]+$grille[4][1]+$grille[5][1]+$grille[6][1]+$grille[7][1];
$tours++;}
$sommeligTrois = $grille[2][0]+$grille[2][1]+$grille[2][2]+$grille[2][3]+$grille[2][4]+$grille[2][5]+$grille[2][6]+$grille[2][7];
while($sommeligTrois!=4){
      generateurligneTrois();
      $sommeligTrois = $grille[2][0]+$grille[2][1]+$grille[2][2]+$grille[2][3]+$grille[2][4]+$grille[2][5]+$grille[2][6]+$grille[2][7];
$tours++;}
$sommecolTrois = $grille[0][2]+$grille[1][2]+$grille[2][2]+$grille[3][2]+$grille[4][2]+$grille[5][2]+$grille[6][2]+$grille[7][2];
while($sommecolTrois!=4){
      generateurcolTrois();
      $sommecolTrois = $grille[0][2]+$grille[1][2]+$grille[2][2]+$grille[3][2]+$grille[4][2]+$grille[5][2]+$grille[6][2]+$grille[7][2];
$tours++;}
$sommeligQuatre = $grille[3][0]+$grille[3][1]+$grille[3][2]+$grille[3][3]+$grille[3][4]+$grille[3][5]+$grille[3][6]+$grille[3][7];
while($sommeligQuatre!=4){
      generateurligneQuatre();
      $sommeligQuatre = $grille[3][0]+$grille[3][1]+$grille[3][2]+$grille[3][3]+$grille[3][4]+$grille[3][5]+$grille[3][6]+$grille[3][7];
$tours++;}
$sommecolQuatre = $grille[0][3]+$grille[1][3]+$grille[2][3]+$grille[3][3]+$grille[4][3]+$grille[5][3]+$grille[6][3]+$grille[7][3];
while($sommecolQuatre!=4){
      generateurcolQuatre();
      $sommecolQuatre = $grille[0][3]+$grille[1][3]+$grille[2][3]+$grille[3][3]+$grille[4][3]+$grille[5][3]+$grille[6][3]+$grille[7][3];
$tours++;}

$sommeligCinq = $grille[4][0]+$grille[4][1]+$grille[4][2]+$grille[4][3]+$grille[4][4]+$grille[4][5]+$grille[4][6]+$grille[4][7];
while($sommeligCinq!=4){
      generateurligneCinq();
      $sommeligCinq = $grille[4][0]+$grille[4][1]+$grille[4][2]+$grille[4][3]+$grille[4][4]+$grille[4][5]+$grille[4][6]+$grille[4][7];
$tours++;}
$sommecolCinq = $grille[0][4]+$grille[1][4]+$grille[2][4]+$grille[3][4]+$grille[4][4]+$grille[5][4]+$grille[6][4]+$grille[7][4];
while($sommecolCinq!=4){
      generateurcolCinq();
      $sommecolCinq = $grille[0][4]+$grille[1][4]+$grille[2][4]+$grille[3][4]+$grille[4][4]+$grille[5][4]+$grille[6][4]+$grille[7][4];
$tours++;}

$sommeligSix = $grille[5][0]+$grille[5][1]+$grille[5][2]+$grille[5][3]+$grille[5][4]+$grille[5][5]+$grille[5][6]+$grille[5][7];
while($sommeligSix!=4){
      generateurligneSix();
      $sommeligSix = $grille[5][0]+$grille[5][1]+$grille[5][2]+$grille[5][3]+$grille[5][4]+$grille[5][5]+$grille[5][6]+$grille[5][7];
$tours++;}
$sommecolSix = $grille[0][5]+$grille[1][5]+$grille[2][5]+$grille[3][5]+$grille[4][5]+$grille[5][5]+$grille[6][5]+$grille[7][5];
while($sommecolSix!=4){
      generateurcolSix();
      $sommecolSix = $grille[0][5]+$grille[1][5]+$grille[2][5]+$grille[3][5]+$grille[4][5]+$grille[5][5]+$grille[6][5]+$grille[7][5];
$tours++;}
$sommeligSept = $grille[6][0]+$grille[6][1]+$grille[6][2]+$grille[6][3]+$grille[6][4]+$grille[6][5]+$grille[6][6]+$grille[6][7];
while($sommeligSept!=4){
      generateurligneSept();
      $sommeligSept = $grille[6][0]+$grille[6][1]+$grille[6][2]+$grille[6][3]+$grille[6][4]+$grille[6][5]+$grille[6][6]+$grille[6][7];
$tours++;}
$sommecolSept = $grille[0][6]+$grille[1][6]+$grille[2][6]+$grille[3][6]+$grille[4][6]+$grille[5][6]+$grille[6][6]+$grille[7][6];
while($sommecolSept!=4){
      generateurcolSept();
      $sommecolSept = $grille[0][6]+$grille[1][6]+$grille[2][6]+$grille[3][6]+$grille[4][6]+$grille[5][6]+$grille[6][6]+$grille[7][6];
$tours++;}
$sommeligHuit = $grille[7][0]+$grille[7][1]+$grille[7][2]+$grille[7][3]+$grille[7][4]+$grille[7][5]+$grille[7][6]+$grille[7][7];
while($sommeligHuit!=4){
      generateurligneHuit();
      $sommeligHuit = $grille[7][0]+$grille[7][1]+$grille[7][2]+$grille[7][3]+$grille[7][4]+$grille[7][5]+$grille[7][6]+$grille[7][7];
$tours++;}
echo $tours;
