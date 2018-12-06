(() => {

    let dog      = document.querySelector('#dog'),  
        camera   = document.querySelector('#camera'),
        travel   = document.querySelector('#travel'),   
    
        tl = new TimelineMax ({});
        
        
        //Animation that happen automatically when the page load
        function startAnim(){
            tl.from(dog, 4,{
                opacity:0
            });
            tl.from(camera, 4,{
                opacity:0
            });
            tl.from(travel, 4,{
                opacity:0
            })
        
        }
    
       
        window.addEventListener('load',startAnim,false);
        
        
        })();   