
        let open_leszno = document.querySelector('.opening-hours-leszno');
        let hours_leszno = document.querySelector('.hours-open-leszno');

        let open_krzemieniewo = document.querySelector('.opening-hours-krzemieniewo');
        let hours_krzemieniewo = document.querySelector('.hours-open-krzemieniewo');

        if(open_leszno)
        {
            open_leszno.addEventListener("mouseout", function()
            {
                hours_leszno.style.display="none";  
            })

            open_leszno.addEventListener("mouseover", function()
            {
                hours_leszno.style.display="block";
            })
        }

        
            // open_leszno.addEventListener("mouseout", function()
            // {
            //     hours_leszno.style.display="none";  
            // })

            // open_leszno.addEventListener("mouseover", function()
            // {
            //     hours_leszno.style.display="block";
            // })
        


        if(open_krzemieniewo)
        {
            open_krzemieniewo.addEventListener("mouseout", function()
            {
                hours_krzemieniewo.style.display="none";  
            })

            open_krzemieniewo.addEventListener("mouseover", function()
            {
                hours_krzemieniewo.style.display="block";
            })
        }


        // open_krzemieniewo.addEventListener("mouseout", function()
        // {
        //     hours_krzemieniewo.style.display="none";  
        // })

        // open_krzemieniewo.addEventListener("mouseover", function()
        // {
        //     hours_krzemieniewo.style.display="block";
        // })
        
   