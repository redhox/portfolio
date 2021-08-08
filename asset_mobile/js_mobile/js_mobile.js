 onload:{
            page_1();
        }

        async function page_1(){
            document.getElementById('ligne_1').style.display =  'block';await sleep(1200);
                
            document.getElementById('lettre_b').style.display =  'block';await sleep(100);
            document.getElementById('lettre_o').style.display =  'block';await sleep(200);
            document.getElementById('lettre_n').style.display =  'block';await sleep(250);
            document.getElementById('lettre_j').style.display =  'block';await sleep(200);
            document.getElementById('lettre_o2').style.display =  'block';await sleep(200);
            document.getElementById('lettre_u').style.display =  'block';await sleep(200);
            document.getElementById('lettre_r').style.display =  'block';await sleep(2000);
            
            document.getElementById('lettre_r').style.display =  'none';await sleep(100);
            document.getElementById('lettre_u').style.display =  'none';await sleep(100);
            document.getElementById('lettre_o2').style.display =  'none';await sleep(100);
            document.getElementById('lettre_j').style.display =  'none';await sleep(100);
            document.getElementById('lettre_n').style.display =  'none';await sleep(100);
            document.getElementById('lettre_o').style.display =  'none';await sleep(100);
            document.getElementById('lettre_b').style.display =  'none';await sleep(100);


            document.getElementById('lettre_f').style.display =  'block';await sleep(150);
            document.getElementById('lettre_o3').style.display =  'block';await sleep(200);
            document.getElementById('lettre_l').style.display =  'block';await sleep(250);
            document.getElementById('lettre_i').style.display =  'block';await sleep(150);
            document.getElementById('lettre_o4').style.display =  'block';await sleep(400);

            document.getElementById('ligne_1').style.display =  'none';await sleep(400);
            document.getElementById('ligne_2').style.display =  'block';await sleep(100);

            document.getElementById('lettre_d').style.display =  'block';await sleep(100);
            document.getElementById('lettre_e').style.display =  'block';await sleep(200);

            document.getElementById('ligne_2').style.display =  'none';await sleep(250);
            document.getElementById('ligne_3').style.display =  'block';await sleep(400);

            document.getElementById('lettre_m').style.display =  'block';await sleep(200);
            document.getElementById('lettre_o5').style.display =  'block';await sleep(20);
            document.getElementById('lettre_r2').style.display =  'block';await sleep(250);
            document.getElementById('lettre_g').style.display =  'block';await sleep(100);
            document.getElementById('lettre_a').style.display =  'block';await sleep(100);
            document.getElementById('lettre_n2').style.display =  'block';await sleep(200);

            document.getElementById('ligne_3').style.display =  'none';await sleep(400);
            document.getElementById('ligne_4').style.display =  'block';await sleep(550);

            document.getElementById('lettre_c').style.display =  'block';await sleep(150);
            document.getElementById('lettre_o6').style.display =  'block';await sleep(150);
            document.getElementById('lettre_u2').style.display =  'block';await sleep(400);
            document.getElementById('lettre_l2').style.display =  'block';await sleep(400);
            document.getElementById('lettre_m2').style.display =  'block';

            
            document.getElementById('ligne_4').style.opacity =  '0';
            document.getElementById('ligne_4').style.backgroundColor =  'red';
            document.getElementById('lettre_d').style.opacity =  '0';
            document.getElementById('lettre_e').style.opacity =  '0';
            document.getElementById('lettre_d').style.color =  'red';
            document.getElementById('lettre_e').style.color =  'red';
        }






        async function page(npage){
            page_3();
            document.getElementById('main').style.transition ='0.5s';
            document.getElementById('main').style.top ='-' + 100 + '%';
            await sleep(500);
            document.getElementById('page_1').style.display = 'none';
            document.getElementById('page_2').style.display = 'none';
            document.getElementById('page_3').style.display = 'none';
            document.getElementById('page_4').style.display = 'none';
            document.getElementById('page_5').style.display = 'none';

            document.getElementById('main').style.transition ='0s';
            document.getElementById('main').style.top = 100 + '%';
            await sleep(500);
            document.getElementById('page_' + npage).style.display = 'block';
            document.getElementById('main').style.transition ='0.5s';
            document.getElementById('main').style.top = 0 + 'px';
        }

        async function page_3(page){
            if(page == 'index'){
                document.getElementById('index').style.height = '85%';

                document.getElementById('text_index').style.height = '90%';
                document.getElementById('text_list').style.height = '0%';
        
                document.getElementById('list').style.height = '15%';
            }else if(page == 'list'){
                document.getElementById('list').style.height = '85%';

                document.getElementById('text_list').style.height = '90%';
                document.getElementById('text_index').style.height = '0%';


                document.getElementById('index').style.height = '15%';
            }else{
                document.getElementById('index').style.height = '50%';
                document.getElementById('list').style.height = '50%';
                document.getElementById('text_list').style.height = '0%';
                document.getElementById('text_index').style.height = '0%';

            }
        }

        function sleep(ms) {
            return new Promise(resolve => setTimeout(resolve, ms));
        }