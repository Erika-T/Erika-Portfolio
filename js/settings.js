particlesJS('home',{
    "particles":{
   
  //--Shape----------
        "number":{
          "value":3, //number of shape
          "density":{
            "enable":true, //make it enable to change shape density
            "value_area":200 //shape density
          }
        },
        "shape":{
          "type":"image", //shape（circle, edge, triangle, polygon, star, image）
          "stroke":{
            "width":0, //shape's border width
            "color":"#c03d4b" //border color
          },
          //If type = polygon
            "polygon": {
            "nb_sides": 5 //number of polygon
          },
          //If type = image
          "image": {
            "src": "assets/petal.png",
            "width": 100,
            "height": 100
          }
        },
        "color":{
          "value":"#c03d4b" //color of shape
        },
        "opacity":{
          "value":1, //opasity of shape
          "random":false, //make opacity of shape ramdom or not?
          "anim":{
            "enable":false, //animate opacity of shape?
            "speed":2, //animation speed
            "opacity_min":0.1, //minimun opacity
            "sync":false //全てのシェイプを同時にアニメーションさせるか否か
          }
        },
        "size":{
          "value":10, //size of shape
          "random":true, //make size of shape random or not?
          "anim":{
            "enable":false, //animate shape size?
            "speed":30, //Speed of animation
            "size_min":0.1, //min size
            "sync":false //全てのシェイプを同時にアニメーションさせるか否か
          }
        },
  //--------------------
  
  //--Line----------
        "line_linked":{
          "enable":false, //line or no?
          "distance":150, //distance of shapes
          "color":"#ffffff", //line color
          "opacity":0.4, //line opacity
          "width":1 //width of line
        },
  //--------------------
  
  //--Motion----------
        "move":{
          "speed":2, //shape speed
          "straight":false, //個々のシェイプの動きを止めるか否か
          "direction":"bottom", //エリア全体の動き(none、top、top-right、right、bottom-right、bottom、bottom-left、left、top-leftより選択)
          "out_mode":"out" //エリア外に出たシェイプの動き(out、bounceより選択)
        }
  //--------------------
  
      },
   
      "interactivity":{
        "detect_on":"canvas",
        "events":{
  
  //--When Mouseover----------
          "onhover":{
            "enable":true, //enable / disable mouseover move
            "mode":"repulse" //movement when mouseover(grab/repulse/bubble)
          },
  //--------------------
  
  //--When Clicked----------
          "onclick":{
            "enable":true, //enable / disable onclick
            "mode":"push" //movement when clicked(grab/repulse/bubble/push/remove)
          },
  //--------------------
  
        },
   
        "modes":{
  
  //--Line between cursor and shape----------
          "grab":{
            "distance":100, //distance from cursor
            "line_linked":{
              "opacity":1 //opacity of line
            }
          },
  //--------------------
  
  //--Shape runs away from cursor----------
          "repulse":{
            "distance":100 //distance from cursor
          },
  //--------------------
  
  //--シェイプが膨らむ----------
          "bubble":{
            "distance":400, //distance from cursor
            "size":40, //シェイプの膨らむ大きさ
            "opacity":8, //膨らむシェイプの透明度
            "duration":2, //膨らむシェイプの持続時間(onclick時のみ)
            "speed":3 //膨らむシェイプの速度(onclick時のみ)
          },
  //--------------------
  
  //--Shape incrememt----------
          "push":{
            "particles_nb":4 //number of shape increments
          },
  //--------------------
  
  //--Shape decrement----------
          "remove":{
            "particles_nb":2 //number of shape decrements
          }
  //--------------------
  
        }
      },
      "retina_detect":true, //Enable Retina Display?
      "resize":true //canvasのサイズ変更にわせて拡大縮小するか否か
    }
  );