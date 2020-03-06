
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cixware home page</title>
    <link rel="stylesheet" href="tailwind.css">
</head>
<body class="overflow-x-hidden mx-4 px-8" > 
    <header class="pt-8 text-gray-700  xl:flex-row md:justify-between  ">
        <h1 class="text-3xl font-bold flex">
            <img class="h-10 w-10 rounded-full" src="logo.jpeg" alt="">
            <div>
          
           <div> ixware<span class="text-gray-900">Group</span></div>
           </div>
        </h1>
        <div class="flex flex-col-reverse bg-gray-700 text-white lg:flex-row md:justify-between mt-10 mb-10 ">
        
            <div class="flex flex-col pr-48 text-justify  md:flex-row  text-gray">
                <a class="ml-6 py-1 mt-1 px-2 font-bold hover:text-teal-900 " href="home.html">Home</a>
                <a class="ml-6 py-1 mt-1 px-2 font-bold hover:text-teal-900 " href="about.html">Products</a>
                <a class="ml-6 py-1 mt-1 px-2 font-bold hover:text-teal-900  " href="services.html">Download</a>
                <a class="ml-6 py-1 mt-1 px-2 font-bold hover:text-teal-900 " href="products.html">Buy Now</a>
                <a class="ml-6 py-1 mt-1 px-2 font-bold font-bold  hover:text-teal-900" href="Clients.html"> Support</a>
                <a class="ml-6 py-1 mt-1 px-2 font-bold font-bold  hover:text-teal-900" href="Clients.html"> About</a>
            </div>
            <div>
                <div class="relative  border-2 rounded-md border-teal-700 hover:border-green-500 "> 
                    <i class="fas fa-search absolute mt-3 ml-3 text-teal-700  "></i>
                    <input  class="h-8  overflow-hidden md:w-auto "  placeholder="Search"  type="text" required>
            </div>
     </div>
        </div>
    </header>
    <section class="flex mt-10 ">
        <div class="mr-8 pt-2 border-2 px-4 pb-2">
             <div class=" flex justify-between"> 
                 <img class="w-64" src="img.png" alt="">
                 <div class="mx-8 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum iusto, qui fugit ad earum tempore architecto 
                     eveniet distinctio ducimus vero minima aperiam odit ex mollitia iste repellendus voluptas officia. Velit.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto reiciendis neque ab eius id odit aliquid? Natus doloremque
                     placeat alias accusantium unde magni. Voluptates nostrum, esse perspiciatis accusamus recusandae molestias.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus sapiente iste ea, ad, ducimus autem eum voluptatem corrupti quis quae
                      eius, possimus fuga architecto pariatur consequatur laboriosam amet. Est, distinctio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, nobis temporibus corporis earum sapiente voluptatem repudiandae,
                       nostrum ullam voluptatum iure veniam, consectetur expedita aliquam pariatur deleniti labore architecto delectus possimus.
                 </div> 
             </div>
             <div>
               <div class="flex justify-between  px-64 mt-4">
                     <button class="border-2 bg-teal-600 rounded-full  px-2 py-1 text-white" type="submit">Download</button>
              
                
                 <button  class="border-2 bg-teal-600 rounded-full px-2 py-1 text-white" type="submit">Purchase</button>
             </div>
             <div class="mt-8">
                 <h2 class="bg-gray-700 text-white">
                     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, dicta.
                 </h2>
                 <div class="flex justify-between mt-8">
                     <div>
                         <img class="w-64 h-64" src="img-1.png" alt="" >
                         <div class="w-64 mt-4">
                             Lorem ipsum dolor sit amet consectetur adidkjdf  dklfjd dfj dfuoik jklsfuoilj
                         </div>
                     </div>
                     <div>
                         <img class="w-64" src="img-2.png" alt="">
                         <div class="w-64 mt-4">
                             Lorem ipsum dolor sit amet consectetur adidkjdf  dklfjd dfj dfuoik jklsfuoilj
                         </div>
                     </div>
                     <div >
                     <table class="border-2">
                     <img class="w-64" src="img.png" alt="">
                            </table>
                         <div class="w-64 mt-4">
                             Lorem ipsum dolor sit amet consectetur adidkjdf  dklfjd dfj dfuoik jklsfuoilj
                         </div>
                     </div>
                 </div>
                 <div class="mt-8">
                   <?php
                   $str="lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente veritatis dolore, a eum necessitatibus nemo minus facilis 
                   non doloremque cumque nostrum blanditiis hic similique suscipit. Nulla animi incidunt necessitatibus dolore.
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum officia tempora nam, similique quas, amet deserunt maxime
                    nulla qui reiciendis, possimus eaque assumenda nihil cupiditate odit minus iste quo? Ea? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente sit corporis, harum praesentium quos animi fugit nulla
                     voluptatibus! Quam quidem perferendis facere optio natus tempore molestiae doloremque reprehenderit eligendi esse?";
                     echo ucfirst($str);
                     ?>
                 </div>
             </div>
            </div>
        </div>
        <div class="w-full" >
            <div class="mb-10 border-2 pb-4 ">
                 <h1 class="bg-gray-700 text-white">Social</h1>
                 <img src="img-3.png" alt="" class="wx-16 p-6">
                 <div class="flex justify-center pl-2">
                 <button class="border-2 mt-4 align-center text-center bg-teal-700 mr-4 rounded-full px-2 py-1 text-white" type="submit">Share and Links</button>
                 </div>
            </div>
            <div class="border-2 pb-4">
                 <div class="bg-gray-700">Navigate</div>
                 <div>
                        <?php     
                        $num=1;
                        
                            while($num<8){
                                echo '<li class="mx-2">'.'items-'.$num.'</li>'.'<br>';
                                $num++;
                            }
                        
                        ?>
                </div>
            </div>
        </div>
    </section>
    <section class="h-4 bg-gray-700 mt-4">
    </section>
    <section class="mx-auto px-64 underline mt-2">
        <div class="flex justify-between">
            <a href="#">Home</a>
            <a href="">Products</a>
            <a href="">Privacy</a>
            <a href="">Terms</a>
            <a href="">See Maps</a>
            <a href="">links</a>
        </div>
    </section>
    <footer class="mx-auto">
        <div class="text-center  text-xs text-bold mt-2 mb-4  ">
            Copyright company &copy;2020. All Right Preserved.
        </div>
    </footer>
</body>
</html>
