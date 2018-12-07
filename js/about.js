(() => {

    let dog      = document.querySelector('#dog'),  
        camera   = document.querySelector('#camera'),
        travel   = document.querySelector('#travel'),   
        line      = document.querySelector('#time'),
    
        tl = new TimelineMax ({});
        
        
        //Animation that happen automatically when the page load
        function startAnim(){
            tl.from(dog, 2,{
                opacity:0
            });
            tl.from(camera, 2,{
                opacity:0
            });
            tl.from(travel, 2,{
                opacity:0
            });
            tl.from(line, 1,{
                x:100,
                opacity: 0
            })
        
        }
    
       
        window.addEventListener('load',startAnim,false);
        
        
        })();   