function volet_code(n){
    let xMax = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    xMax = xMax - 50;
    if(n == 0){
        document.getElementById('page_code').style.width = xMax + 'px';
        document.getElementById('page_code').style.top = '0px';
    }else{
        document.getElementById('page_code').style.top = '-100vh';
    }
}
onload:{
    let xMax = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    xMax = xMax - 50

    if(xMax < 700){
        location.replace("./folio_4_mobile.php")
    }

    document.getElementById('main').style.width = xMax + 'px';
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

await sleep(1000);
document.getElementById('page_1_block').style.width =  '900px';
await sleep(10);
document.getElementById('page_1_image').style.width =  '290px';
}

//lettre_f
//lettre_o3
//lettre_l
//lettre_i
//lettre_o4



async function page(npage){
volet_code(1);
page_3();
document.getElementById('main').style.transition ='0.5s';

let  o=0;
let i = 0;
let xMax = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
let yMax = window.innerHeight;
let wmax = xMax - 50;
console.log('h'+ yMax + 'L' + xMax);
let h = yMax - 100;
let w=wmax - 100;

document.getElementById('main').style.height = h + 'px';
document.getElementById('main').style.width = w + 'px';
document.getElementById('main').style.marginTop = 50 + 'px';
document.getElementById('main').style.marginRight = 50 + 'px';

    await sleep(500);

document.getElementById('main').style.right ='-' + 100 + '%';
await sleep(500);

document.getElementById('page_1').style.display = 'none';
document.getElementById('page_2').style.display = 'none';
document.getElementById('page_3').style.display = 'none';
document.getElementById('page_4').style.display = 'none';
document.getElementById('page_5').style.display = 'none';

document.getElementById('main').style.transition ='0s';
document.getElementById('main').style.right = 100 + '%';
document.getElementById('page_' + npage).style.opacity = 0;
document.getElementById('page_' + npage).style.display = 'block';
await sleep(200);
document.getElementById('main').style.transition ='0.5s';
document.getElementById('main').style.right = 0 + 'px';
await sleep(500);
document.getElementById('main').style.transition ='1.5s';
document.getElementById('main').style.marginRight = 0 + 'px';
document.getElementById('main').style.height = yMax + 'px';
document.getElementById('main').style.width = wmax + 'px';
document.getElementById('main').style.marginTop = 0 + 'px';

for(i=0;i<100;i++){
    o=o+0.01;
    
    document.getElementById('page_' + npage).style.opacity = o;
    await sleep(30);
}
}


async function page_3(page){
if(page == 'index'){
    document.getElementById('page_3_index').style.width = '85%';
    document.getElementById('page_3_index').style.backgroundSize = 'contain';
    document.getElementById('index_titre').style.writingMode = 'horizontal-tb';
    document.getElementById('index_titre').style.display = 'none';
    document.getElementById('text_index').style.display = 'block';

    document.getElementById('page_3_list').style.width = '15%';
    document.getElementById('page_3_list').style.backgroundSize = 'cover';
    document.getElementById('list_titre').style.writingMode = 'vertical-rl';
    document.getElementById('list_titre').style.display = 'block';
    document.getElementById('text_list').style.display = 'none';
    document.getElementById('text_list').style.width = '0px';

    await sleep(1000);
    
    document.getElementById('text_index').style.width = '500px';
}else if(page == 'list'){
    document.getElementById('page_3_list').style.width = '85%';
    document.getElementById('page_3_list').style.backgroundSize = 'contain';
    document.getElementById('list_titre').style.writingMode = 'horizontal-tb';
    document.getElementById('list_titre').style.display = 'none';
    document.getElementById('text_list').style.display = 'block';


    document.getElementById('page_3_index').style.width = '15%';
    document.getElementById('page_3_index').style.backgroundSize = 'cover';
    document.getElementById('index_titre').style.writingMode = 'vertical-rl';
    document.getElementById('index_titre').style.display = 'block';
    document.getElementById('text_index').style.display = 'none';
    document.getElementById('text_index').style.width = '0px';

    await sleep(1000);
    
    document.getElementById('text_list').style.width = '500px';
}else{
    document.getElementById('page_3_index').style.width = '50%';
    document.getElementById('page_3_list').style.width = '50%';
    document.getElementById('page_3_index').style.backgroundSize = 'cover';
    document.getElementById('page_3_list').style.backgroundSize = 'cover';
    document.getElementById('list_titre').style.writingMode = 'horizontal-tb';
    document.getElementById('index_titre').style.writingMode = 'horizontal-tb';
    document.getElementById('index_titre').style.display = 'block';
    document.getElementById('list_titre').style.display = 'block';
    document.getElementById('text_index').style.display = 'none';
    document.getElementById('text_list').style.display = 'none';

}
}



function sleep(ms) {
return new Promise(resolve => setTimeout(resolve, ms));
}