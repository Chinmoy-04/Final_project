<?php

include ('connection.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="website icon" type="png"
     href="./images/wesiteIcon.jpeg">
     <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar-1">
   <!-- <div id="nav-left">
    <a href="#">Sell on Pepperfry</a>   
    <a href="#">Become a Franchisee</a>
    <a href="#">Buy in Bulk</a>
    <a href="#">Find a Studio</a>
   </div> -->
   <div href="#" id="nav-right">

   <?php
session_start(); // Start session

// Check if the user is logged in
if (isset($_GET['username'])) {
    $username = $_GET['username']; // Retrieve username from URL parameter
    echo "Welcome, $username!";
}
?>

    <a href="#">Enter pincode
        <img id="edit_1" src="https://img.icons8.com/external-anggara-basic-outline-anggara-putra/24/external-edit-basic-ui-anggara-basic-outline-anggara-putra.png" alt="">
    </a>
    <a href="#">Find Pepperfry Studio</a>
   </div>
</div>
<div class="nav-middle">
    <div>
        <a href="./index.html">
        <img src="./images/logo new.png" alt="error">
        </a>
    </div>
    <div id="searchbar">
        <form>
            <input  type="text" placeholder="Your door to happiness opens with a search" id="search">
            <img src="https://img.icons8.com/ios-glyphs/30/search--v1.png" alt="error">
        </form>
    </div>
    <div id="images">
        <a href="#"><img src="https://img.icons8.com/external-vectorslab-flat-vectorslab/53/external-Help-Chat-customer-support-vectorslab-flat-vectorslab-2.png" alt="error"></a>
        <a href="./login.php"><img src="https://img.icons8.com/material-sharp/256/user.png" alt="error"></a>
        <a href="#"><img src="https://img.icons8.com/ios/256/like.png" alt="error"></a>
        <a href="./card.php"><img src="https://img.icons8.com/external-smashingstocks-detailed-outline-smashing-stocks/256/external-Add-To-Cart-mobile-shopping-smashingstocks-detailed-outline-smashing-stocks-4.png" alt="error"></a>
    </div>
</div>
    <header>

        <div class="container">
           
                        <div class="navbar-2">
                        <div class="hyperlinks">
                        <a href="#">Furniture</a>
                       <div class="megamenu">
                        <div class="megamenuitems">
                            <h4>Sofas</h4>
                                <p>3 Seater Sofas</p>
                                <p>2 Seater Sofas</p>
                                <p>1 Seater Sofas</p>
                                <p>Sofa Sets</p>
                        </div>
                        <div class="megamenuitems">
                            <h4>Recliners</h4>
                                <p>1 Seater</p>
                                <p>2 Seater</p>
                                <p>3 Seater</p>
                                <p>Recliner Sets</p> 
                        </div>
                        <div class="megamenuitems">
                            <h4>Chairs</h4>
                                <p>Arm Chairs</p>
                                <p>Rocking Chairs</p>
                                <p>Folding Chairs</p>
                                <p> Iconic Chairs</p>
                                <p>Cafe Chairs</p>
                        </div>
                        <div class="megamenuitems">
                            <h4>Centre Tables</h4>
                                <p>Coffee Tables</p>
                                <p>Coffee Table Sets</p>
                                <p>Nesting Tables</p>
                                <p>Trunks</p>
                        </div>
                        <div class="megamenuitems">
                            <h4>Dining Sets</h4>
                                <p>4 Seater Sets</p>
                                <p>6 Seater Sets</p>
                                <p>8 Seater Sets</p>
                                <p>2 Seater Sets</p>
                         </div>
                        <div class="megamenuitems">
                            <h4>Beds</h4>
                                <p>Queen Size Beds</p>
                                <p>King Size Beds</p>
                                <p>Single Beds</p>
                                <p> Poster Beds</p>
                                <p>Folding Beds</p>
                        </div>
                        <div class="megamenuitems">
                            <h4>Wardrobes</h4>
                                <p>1 Door</p>
                                <p>2 Door</p>
                                <p>3 Door</p>
                                <p>4 Door</p>
                                <p>4+ Door</p>
                                <p>Sliding Door</p>
                        </div>
                        <div class="megamenuitems">
                            <h4>Study Tables</h4>
                                <p>Writing Tables</p>
                                <p>Computer Tables</p>
                                <p>Hutch Desks</p>
                                <p>Foldable Tables</p>
                                <p>Wall Mounted</p>
                                <p>Portable Tables</p>
                        </div>
                        <div class="megamenuitems">
                            <h4>Outdoor</h4>
                                <p>Swings</p>
                                <p>Hammocks</p>
                                <p>Tables</p>
                                <p>Table & Chair Sets</p>
                                <p>Seating</p>
                                <p>Plastic Chairs</p>
                        </div>
                        <div class="megamenuitems">
                            <h4>Sectional Sofas</h4>
                                <p>LHS Sectionals</p>
                                <p>RHS Sectionals</p>
                                <p>Corner Sofas</p>
                        </div>
                        <div class="megamenuitems">
                            <h4>Sofa Chairs</h4>
                                <p>Wing Chairs</p>
                                <p>Lounge Chairs</p>
                                <p>Slipper Chairs</p>
                                <p>Barrel Chairs</p>
                        </div>
                       
                        <div class="megamenuitems">
                            <h4>Kids & Teens</h4><p>Cribs</p>
                                <p>Beds</p>
                                <p>Bunk Beds</p>
                                <p>Study</p>
                                <p>Wardrobes</p>
                                <p>Book Shelves</p>
                                <p>Storage</p>
                                <p>Seating</p>
                                <p>Bean Bags</p>
                        </div>
                        <div class="megamenuitems">
                            <h4>Office Furniture</h4>
                                <p>Office Chairs</p>
                                <p>Office Tables</p>
                                <p>Office Cabinets</p>
                        </div>
                        <div class="megamenuitems">
                            <h4>Furniture Care</h4>
                                <p>Furniture Care Kit</p>
                                <p>Sofa Spa</p>
                       </div>
                       
                        <div class="megamenuitems">
                            <h4>Settees & Benches</h4>
                                <p>Settees</p>
                                <p>Benches</p>
                                <p>Recamiers</p>
                        </div>
                        <div class="megamenuitems">
                            <h4>Stools & Pouffes</h4>
                                <p>Foot Stools</p>
                                <p>Seating Stools</p>
                                <p>Pouffes</p>
                       </div>
                        <div class="megamenuitems">
                            <h4>End Tables</h4>
                                <p>C Shaped Tables</p>
                                <p>Console Tables</p>
                                <p>Nest of Tables</p>
                       </div>
                        <div class="megamenuitems">
                            <h4>Shoe Racks</h4>
                            <p>Shoe Cabinets</p>
                                <p>Open Shoe Racks</p>
                                <p>Shoe Rack & Seat</p>
                                <p>Tilt Out Racks</p>
                       </div>
                       </div>
                    </div>
                    <div class="hyperlinks">
                       <a href="#">Home Decor</a>
                       <div class="megamenu">
                        <div class="megamenuitems">
                            <h4>Vases</h4>
                                <h4>Figurines</h4>
                                <h4>Collectibles</h4>
                                <h4>Showpieces</h4>  
                        </div>
                        <div class="megamenuitems">
                            <h4>Table Organizers</h4>
                                <p>Table Clocks</p>
                                <p>Decorative Boxes</p>
                                <p>Desk Organizers</p>
                                <p>Magazine Racks</p>
                                <p>Pen Stands</p>
                                <p>Bookends</p>
                        </div>
                        <div class="megamenuitems">
                            <h4>Spiritual</h4>
                                <p>Mandirs</p>
                                <p>Pooja Shelves</p>
                                <p>Religious Idols</p>
                                <p>Religious Frames</p> 
                                <p>Chowkies</p>
                                <p>Feng Shui</p>
                        </div>
                        <div class="megamenuitems">
                            <h4>Candles</h4>
                                <p>Decorative</p>
                                <p>Scented</p>
                                <p>Tea Lights</p>
                                <p>Home Fragrances</p>
                        </div>
                        <div class="megamenuitems">
                            <h4>Natural Plants</h4>
                                <p>Indoor</p>
                                <p>Flowering</p>
                                <p>Succulents</p>
                                <p>Bonsai</p>
                                <p>Plant Bundles</p>
                                <p>Low Maintenance</p>
                        </div>
                        <div class="megamenuitems">
                            <h4>Garden Décor</h4>
                               <h4>Gardening Tools</h4>
                               <h4>Indoor Fountains</h4>
                         </div>
                        <div class="megamenuitems">
                            <h4>Wall Art</h4>
                                <p>Metal Wall Art</p>
                                <p>Wooden Wall Art</p>
                                <p>Jharokhas</p>
                        </div>
                        <div class="megamenuitems">
                            <h4>Shelves & Cabinets</h4>
                                <p> Wall Cabinets</p>
                                <p>Wall Shelves</p>
                        </div>
                        <div class="megamenuitems">
                            <h4>Wall Clocks</h4>
                                <p>Decorative</p>
                                <p>Platform</p>
                                <p>Pendulum</p>
                                <p>Cuckoo</p>
                        </div>
                        <div class="megamenuitems">
                            <h4>Photo Frames</h4>
                                <p>Single</p>
                                <p>Collage</p>
                                <p>Clip Type</p>
                                <p>Table Top</p>
                        </div>
                        <div class="megamenuitems">
                            <h4>Festive Decor</h4>
                                <p>Torans</p>
                                <p>Rangoli</p>
                                <p>Christmas Decorations</p>
                        </div>
                        <div class="megamenuitems">
                            <h4>Prayer Essential</h4>
                                <p>Bells</p>
                                <p>Diyas</p>
                                <p>Haldi Kumkum Box</p>
                                <p>Incense Holders</p>
                                <p>Pooja Metalware</p>
                                <p>Prayer Mats</p>
                        </div>
                       
                        <div class="megamenuitems">
                            <h4>Candle Stands</h4>
                                <p>Candle Holders</p>
                                <p>Tea Light Holders</p>
                        </div>
                        <div class="megamenuitems">
                            <h4>Artificial Plants & Flowers</h4>
                                <p>Artificial Plants</p>
                                <p>Artificial Flowers</p>
                                <p>Artificial Grass</p>
                        </div>
                        <div class="megamenuitems">
                            <h4>Kids Decor</h4>
                                <p>Wall Shelves</p>
                                <p>Book Ends</p>
                                <p>Wall Art</p>
                                <p>Clocks</p>
                                <p>Height Charts</p>
                                <p>Picture Frames</p>
                       </div>
                       
                        <div class="megamenuitems">
                            <h4>Wall Plates & Tiles</h4>
                               <h4>Wall Masks</h4>
                               <h4>Animal Busts</h4>
                               <h4>Ethnic Art</h4>
                        </div>
                        <div class="megamenuitems">
                            <h4>Key Holders</h4>
                                <h4>Set Top Box Holders</h4>
                                <h4>Hand Paintings</h4>
                                <h4>Art Prints</h4>
                                <h4> Art Panels</h4>
                       </div>
                        <div class="megamenuitems">
                            <h4>Mirrors</h4>
                                <p>Wall</p>
                                <p>Decorative</p>
                                <p>Floor</p>
                                <p>Full-Length</p>
                                <p>LED</p>
                                <p>Mirror Sets</p>
                       </div>
                       </div>
                    </div>
                    <div class="hyperlinks">
                        <a href="#">Lamps & Lighting</a>
                        <div class="megamenu">
                         <div class="megamenuitems">
                             <h4>Lamps</h4>
                                 <p>Floor Lamps</p>
                                 <p>Shelf Lamps</p>
                                 <p>Table Lamps</p>
                                 <p>Night Lamps</p>
                                 <p>Study Lamps</p>
                         </div>
                         <div class="megamenuitems">
                             <h4>Wall Lights</h4>
                                 <p>Wall Lamps</p>
                                 <p>Picture Lights</p>
                                 <p>Spot & Track</p>
                                 <p>Flush Mounts</p> 
                         </div>
                         <div class="megamenuitems">
                             <h4>Kids Lighting</h4>
                                 <p>Kids Lamps</p>
                                 <p>Kids Wall Lights</p>
                         </div>
                         <div class="megamenuitems">
                             <h4>Bulbs</h4>
                                 <p>Filament Bulbs</p>
                         </div>
                         <div class="megamenuitems">
                             <h4>Outdoor Lights</h4>
                                 <p>Wall Lights</p>
                                 <p>Gate Lights</p>
                                 <p>Garden Lights</p>
                                 <p>Hanging Lights</p>
                          </div>
                         
                         <div class="megamenuitems">
                             <h4>Lamp Shades</h4>
                                 <p>Ceiling Lights</p>
                                 <p>Hanging Lights</p>
                                 <p>Chandeliers</p>
                                 <p>Flush Mounts</p>
                                 <p>Panel Lights</p>
                         </div>
                         <div class="megamenuitems">
                             <h4>LED Lights</h4>
                                 <p>Ceiling Lights</p>
                                 <p>LED Lamps</p>
                                 <p>LED Wall Lights</p>
                                 <p>LED Bulbs</p>
                         </div>
                         <div class="megamenuitems">
                            <img src="https://ii1.pepperfry.com/media/wysiwyg/banners/1600_Lamps&Lighting_Banner1_HoverBanner_25April22.jpg" alt="error">
                         </div>
                         <div class="megamenuitems">
                            <img src="https://ii2.pepperfry.com/media/wysiwyg/banners/1600_Lamps&Lighting_Banner2_HoverBanner_25April22.jpg" alt="error">
                         </div>
                         <div class="megamenuitems">
                             <h4>Smart Lights</h4>
                                 <p>Ceiling Lights</p>
                                 <p>Smart Lamps</p>
                                 <p>Smart Bulbs</p>
                         </div>
                         <div class="megamenuitems">
                             <h4>Festive Lights</h4>
                                 <p>Decorative</p>
                                 <p>String Lights</p>
                         </div>
                        </div>
                     </div>
                     <div class="hyperlinks">
                        <a href="#">Kitchen & Dining</a>
                        <div class="megamenu">
                         <div class="megamenuitems">
                             <h4>Serveware</h4>
                                 <p>Serving Trays</p>
                                 <p>Serving Bowls</p>
                                 <p>Serving Baskets</p>
                                 <p>Serving Dishes</p>
                                 <p>Appetizer Platters</p>
                                 <p>Cake Stands</p>
                                 <p>Tray Sets</p>
                                 <p>Cheese Boards</p>
                                 <p>Cloche</p>
                         </div>
                         <div class="megamenuitems">
                             <h4>Dinnerware</h4>
                                 <p>Dinnerware Sets</p>
                                 <p>Dinner Bowls</p>
                                 <p>Dinner Plates</p>
                                 <p>Side Plates</p> 
                         </div>
                         <div class="megamenuitems">
                             <h4>Bakeware</h4>
                                 <p>Tins & Moulds</p>
                                 <p>Baking Dishes</p>
                         </div>
                         <div class="megamenuitems">
                             <h4>Drinkware</h4>
                                 <p>Everyday Glasses</p>
                                 <p>Jugs</p>
                                 <p>Bottles</p>
                                 <p>Sippers</p>
                                 <p>Wine Glasses</p>
                                 <p>Whiskey Glasses</p>
                               
                         </div>
                         <div class="megamenuitems">
                             <h4>Barware</h4>
                                 <p>Bar Tools</p>
                                 <p>Cocktail Shakers</p>
                                 <p>Ice Buckets</p>
                                 <p>Wine Coolers</p>
                                 <p>Wine Holders</p>
                                 <p>Carafes and Decanters</p>
                                
                          </div>
                         <div class="megamenuitems">
                             <h4>Table Linen</h4>
                                 <p>Table Runners</p>
                                 <p>Table Cloths</p>
                                 <p>Placemats</p>
                                 <p>Table Linen Sets</p>
                                 <p>Napkins</p>
                         </div>
                         <div class="megamenuitems">
                             <h4>Kitchen Organizers</h4>
                                 <p>Containers</p>
                                 <p>Spice Boxes</p>
                                 <p>Casseroles</p>
                                 <p>Lunch Boxes</p>
                                 <p>Kitchen Racks</p>
                         </div>
                         <div class="megamenuitems">
                             <img src="https://ii3.pepperfry.com/media/wysiwyg/banners/1600_Kitchen&Dining_Banner1_HoverBanner_25April22.jpg" alt="error">
                         </div>
                         <div class="megamenuitems">
                             <h4>Cookware</h4>
                                 <p>Pots & Pans</p>
                                 <p>Spatulas & Ladles</p>
                                 <p>Cooking Tools</p>
                         </div>
                         <div class="megamenuitems">
                             <h4>Teaware</h4>
                                 <p>Cups & Saucer Sets</p>
                                 <p>Tea Pots</p>
                                 <p>Coffee Mugs</p>
                                 <p>Coffee Tumblers</p>
                         </div>
                         <div class="megamenuitems">
                             <h4>Knives & Cutlery</h4>
                                 <p>Cutlery Sets</p>
                                 <p>Knife Sets</p>
                                 <p>Serving Cutlery</p>
                                 <p>Cutlery Holders</p>
                         </div>
                        
                         <div class="megamenuitems">
                             <h4>Table Essentials</h4>
                                <p>Pepper Shakers</p>
                                 <p>Condiment Sets</p>
                                 <p>Coasters</p>
                                 <p>Tissue Holders</p>
                         </div>
                         <div class="megamenuitems">
                             <h4>Kitchen Linen</h4>
                                 <p>Aprons</p>
                                 <p>Oven Gloves</p>
                                 <p>Linen Sets</p>
                         </div>
                         
                        </div>
                     </div>
                     <div class="hyperlinks">
                        <a href="#">Furnishings</a>
                        <div class="megamenu">
                         <div class="megamenuitems">
                             <h4>Bed Sheets</h4>
                                 <p>Single</p>
                                 <p>Queen Size</p>
                                 <p>King Size</p>
                                 <p>Fitted Sheets</p>
                         </div>
                         <div class="megamenuitems">
                             <h4>Bath Linen</h4>
                                 <p>Bath Mats</p>
                                 <p>Bath Towels</p>
                                 <p>Hand & Face Towels</p>
                                 <p>Shower Curtains</p>
                                 <p>Towel Sets</p>
                                 <p>Bath Robes</p> 
                         </div>
                         <div class="megamenuitems">
                             <h4>Cushion & Covers</h4>
                                 <p>Cushion Covers</p>
                                 <p>Sofa Covers</p>
                                 <p>Sofa Throws</p>
                                 <p>Chair Pads</p>
                                 <p>Floor Cushions</p>
                                 <p>Cushion Inserts</p>
                                 <p>Chair Covers</p>
                                 <p>Shaped Cushions</p>
                         </div>
                         <div class="megamenuitems">
                             <h4>Carpets</h4>
                                 <p>5 ft x 7 ft</p>
                                 <p>4 ft x 6 ft</p>
                                 <p>3 ft x 5 ft</p>
                                 <p>6 ft x 9 ft</p>
                                 <p>8 ft x 10 ft</p>
                                 <p>9 ft x 12 ft</p>
                                 <p>Round Carpets</p>
                         </div>
                         <div class="megamenuitems">
                             <h4>Runners</h4>
                                 <p>Hand Woven</p>
                                 <p>Hand Tufted</p>
                                 <p>Shaggy</p>
                                 <p>Flat Weave</p>
                                 <p>Machine Made</p>
                          </div>
                         <div class="megamenuitems">
                             <h4>Kids Furnishings</h4>
                                 <p>Bed Sheets</p>
                                 <p>Bedding Sets</p>
                                 <p>Carpets & Mats</p>
                                 <p>Blankets</p>
                                 <p>Curtains</p>
                                 <p>Cushion Covers</p>
                                 <p>Pillows & Covers</p>
                                 <p>Towels</p>
                         </div>
                         <div class="megamenuitems">
                             <h4>Essentials</h4>
                                 <p>Masks</p>
                                 <p>Umbrellas</p>
                                 <p>Yoga Mats</p>
                                 <p>Travel Accessories</p>
                         </div>
                         <div class="megamenuitems">
                            <img src="https://ii1.pepperfry.com/media/wysiwyg/banners/1600_Furnishings_Banner1_HoverBanner_25April22.jpg" alt="error">
                         </div>
                         <div class="megamenuitems">
                             <h4>Bed Linen</h4>
                                 <p>Bedding Sets</p>
                                 <p>Bed Covers</p>
                                 <p>Pillow Covers</p>
                                 <p>Diwan Sets</p>
                                </div>
                         <div class="megamenuitems">
                             <h4>Organizers</h4>
                                 <p>Cloth Organizers</p>
                                 <p>Laundry Baskets</p>
                                 <p>Drawer Organizers</p>
                                 <p>Shoe Organizers</p>
                                 <p>Hooks and Hangers</p>
                         </div>
                         <div class="megamenuitems">
                             <h4>Curtains</h4>
                                 <p>Door Curtains</p>
                                 <p>Window Curtains</p>
                                 <p>Blinds and Shades</p>
                         </div>
                        
                         <div class="megamenuitems">
                             <h4>Dhurries</h4>
                                <p>Cotton</p>
                                 <p>Woolen</p>
                                 <p>Jute</p>
                                 <p>Polyester</p>
                                 <p>Blended</p>
                         </div>
                         <div class="megamenuitems">
                             <h4>Door Mats</h4>
                                <h4>Home Care</h4>
                                 <p>Carpet Spa</p>
                                 <p>Curtain Steaming</p>
                         </div>
                         <div class="megamenuitems">
                             <h4>Quilts & Dohars</h4>
                                 <p>Blankets</p>
                                 <p>Quilts</p>
                                 <p>Dohars</p>
                                 <p>Duvet Covers</p>
                                 <p>Duvet Inserts</p>
                        </div>
                        
                         <div class="megamenuitems">
                             <h4>Curtain Fittings</h4>
                                 <p>Curtain Rods</p>
                                 <p>Tie Backs</p>
                         </div>
                        
                        </div>
                     </div>
                     <div class="hyperlinks">
                        <a href="#">Mattresses</a>
                        <div class="megamenu">
                         <div class="megamenuitems">
                             <h4>King Size</h4>
                                 <p>Foam</p>
                                 <p>Spring</p>
                                 <p>Latex</p>
                                 <p>Coir</p>
                         </div>
                         <div class="megamenuitems">
                             <h4>Queen Size</h4>
                                 <p>Foam</p>
                                 <p>Spring</p>
                                 <p>Latex</p>
                                 <p>Coir</p> 
                         </div>
                         <div class="megamenuitems">
                             <h4>Single</h4>
                                 <p>Foam</p>
                                 <p>Spring</p>
                                 <p>Latex</p>
                                 <p>Coir</p>
                         </div>
                         <div class="megamenuitems">
                             <h4>Foldable</h4>
                                 <p>King Size</p>
                                 <p>Queen Size</p>
                                 <p>Single</p>
                         </div>
                         <div class="megamenuitems">
                             <h4>Toppers</h4>
                                <p>King Size</p>
                                <p>Queen Size</p>
                                <p>Single</p>
                          </div>
                         <div class="megamenuitems">
                            <img src="https://ii2.pepperfry.com/media/wysiwyg/banners/Mattresses_HoverBanner_7_dec_n.jpg" alt="error">
                         </div>
                         <div class="megamenuitems">
                             <img src="https://ii3.pepperfry.com/media/wysiwyg/banners/1600_Mattresses_Banner2_HoverBanner_25April22.jpg" alt="error">
                         </div>
                         <div class="megamenuitems">
                             <h4>Crib Mattresses</h4>
                                 <h4>Pillows</h4>
                                 <h4>Bed Wedges</h4>
                         </div>
                         <div class="megamenuitems">
                             <h4>Protectors</h4>
                                 <p>King Size</p>
                                 <p>Queen Size</p>
                                 <p>Single</p>
                         </div>
                         <div class="megamenuitems">
                             <h4>Mattress Care</h4></div>
                        </div>
                     </div>
                     <div class="hyperlinks">
                        <a href="#">Appliances</a>
                        <div class="megamenu">
                         <div class="megamenuitems">
                             <h4>Processors</h4>
                                 <p>Choppers</p>
                                 <p>Food Processors</p>
                                 <p>Hand Blenders</p>
                                 <p>Juicer Mixer Grinders</p>
                                 <p>Juicers</p>
                                 <p>Mixer & Grinders</p>
                         </div>
                         <div class="megamenuitems">
                             <h4>Breakfast Makers</h4>
                                 <p>Bread & Waffle</p>
                                 <p>Coffee Makers</p>
                                 <p>Egg Boilers</p>
                                 <p>Electric Kettles</p>
                                 <p>Sandwich Makers</p>
                                 <p>Toasters</p> 
                         </div>
                         <div class="megamenuitems">
                             <h4>Cooktops</h4>
                                 <p>Cooking Ranges</p>
                                 <p>Gas Stoves</p>
                                 <p>Built-in Hobs</p>
                                 <p>Induction</p>
                         </div>
                         <div class="megamenuitems">
                             <h4>Iron & Steamers</h4>
                                <h4>Purifiers</h4>
                                 <p>Air Purifiers</p>
                                 <p>Water Purifiers</p>
                         </div>
                         <div class="megamenuitems">
                             <h4>Fans</h4>
                                 <p>Ceiling Fans</p>
                                 <p>Pedestal Fans</p>
                                 <p>Table Fans</p>
                                 <p>Wall Fans</p>
                                 <p>Exhaust Fans</p>
                                 <p>Portable Fans</p>
                          </div>
                         <div class="megamenuitems">
                            <img src="https://ii1.pepperfry.com/media/wysiwyg/banners/1600_Appliances_Banner1_HoverBanner_25April22.jpg" alt="error">
                         </div>
                         <div class="megamenuitems">
                            <img src="https://ii2.pepperfry.com/media/wysiwyg/banners/1600_Appliances_Banner2_HoverBanner_25April22.jpg" alt="error">
                         </div>
                         <div class="megamenuitems">
                             <h4>OTGs</h4>
                                 <p>Fryers</p>
                                 <p>Microwaves</p>
                                 <p>Ovens & OTGs</p>
                         </div>
                         <div class="megamenuitems">
                             <h4>Chimneys</h4>
                                 <p>Designer</p>
                                 <p>Island</p>
                                 <p>Straight Line</p>
                                 <p>Wall-Mounted</p>
                         </div>
                         <div class="megamenuitems">
                             <h4>Heating</h4>
                                 <p>Room Heaters</p>
                                 <p>Water Geysers</p>
                         </div>
                         <div class="megamenuitems">
                             <h4>Vacuum Cleaners</h4>
                         </div>
                        
                         <div class="megamenuitems">
                             <h4>Food Makers</h4>
                                <p>Rice Cookers</p>
                         </div>
                        </div>
                     </div>
                     <div class="hyperlinks">
                        <a href="#">Pets</a>
                        <div class="megamenu">
                         <div class="megamenuitems">
                             <h4>Dog Furniture</h4>
                                 <p>Dog Beds</p>
                                 <p>Dog House</p>
                         </div>
                         <div class="megamenuitems">
                             <h4>Pet Toys</h4>
                                 <p>Plush Toys</p>
                                 <p>Chew Toys</p>
                                 <p>Interactive Toys</p>
                                 <p>Rope Toys</p> 
                                 <p>Rubber Toys</p>
                         </div>
                         <div class="megamenuitems">
                             <h4>Litter & Supplies</h4>
                         </div>
                         <div class="megamenuitems">
                             <img src="https://ii3.pepperfry.com/media/wysiwyg/banners/1600_Pets_Banner1_HoverBanner_25April22.jpg" alt="error">
                         </div>
                         <div class="megamenuitems">
                            <img src="https://ii1.pepperfry.com/media/wysiwyg/banners/1600_Pets_Banner2_HoverBanner_25April22.jpg" alt="error">
                          </div>
                         <div class="megamenuitems">
                            <img src="https://ii2.pepperfry.com/media/wysiwyg/banners/1600_Pets_Banner2_HoverBanner_25April22_n.jpg" alt="error">
                         </div>
                         <div class="megamenuitems">
                             <h4>Cat Furniture</h4>
                                 <p>Cat Beds</p>
                                 <p>Cat Trees & Condos</p>
                         </div>
                         <div class="megamenuitems">
                             <h4>Pet Grooming</h4>
                                 <p>Shampoos</p>
                                 <p>Brushes & Combos</p>
                                 <p>Towels & Wipes</p>
                                 <p>Dental Solutions</p>
                                 <p>Perfumes</p>
                         </div>
                         <div class="megamenuitems">
                             <h4>Bird Houses & Feeders</h4>
                                <h4>Crates & Carriers</h4>
                                <h4>Pet Furnishings</h4>
                                 <p>Mats</p>
                                 <p>Blankets</p>
                                 
                         </div>
                        </div>
                     </div>
                     <div class="hyperlinks">
                        <a href="#">Modular</a>
                     </div>
                     <div class="hyperlinks">
                        <a href="#">Gift Cards</a>
                    </div>
        </div>
        </div>
    
</header>


<div class="main">
    <!-- <imgae slider start> -->
<div class="slider">
    <div class="slides">
        <!-- radio button start -->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!-- radio button ends -->
        <!-- slide images start -->
        <div class="slide first">
            <img src="https://ii1.pepperfry.com/media/wysiwyg/banners/Web_Promo_2x_2202_ES.jpg" alt="error">
        </div>
        <div class="slide">
            <img src="https://ii2.pepperfry.com/media/wysiwyg/banners/WEB_HB1_2x_2102.jpg" alt="error">
        </div>
        <div class="slide">    
            <img src="https://ii3.pepperfry.com/media/wysiwyg/banners/WEB_HB2_2x_2102.jpg" alt="error">
        </div>
        <div class="slide">     
            <img src="https://ii1.pepperfry.com/media/wysiwyg/banners/WEB_HB3_2x_2102.jpg" alt="error">
        </div>
         <!-- slide images ends -->
         <!-- auto navigation start -->
         <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
         </div>
          <!-- auto navigation ends -->
    </div>
    <!-- manual navigation start -->
    <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
    </div>
     <!-- manual navigation end -->
</div>
<div>
    <img id="side-image" src="https://ii2.pepperfry.com/media/wysiwyg/banners/web_rhs_02022023_1.jpg" alt="error">
</div>
</div>



        <!-- <imgae slider end> -->



<div class="register-now">
    <a href="#">
    <img src="https://ii3.pepperfry.com/media/wysiwyg/banners/2021_web_regBanner_2202.jpg" alt="error">
    </a>
</div>
<div class="shopByRoom">
<h1>Shop By Room</h1>
<div class="Rooms">
    <div>
        <a href="./product.php">
        <img src="https://ii2.pepperfry.com/media/wysiwyg/banners/Hp_section4_web_04012023_1.jpg" alt="error">
        <p>Shop Living Room =></p>
    </a>
    </div>
    <div>
        <a href="./product.php">
        <img src="https://ii3.pepperfry.com/media/wysiwyg/banners/Hp_section4_web_04012023_2.jpg" alt="error">
        <p>Shop Bedroom =></p>
    </a>
    </div>
    <div>
        <a href="./product.php">
        <img src="https://ii1.pepperfry.com/media/wysiwyg/banners/Hp_section4_web_04012023_3.jpg" alt="error">
        <p>Shop Dining Room =></p>
    </a>
    </div>
    <div>
        <a href="./product.php">
        <img src="https://ii2.pepperfry.com/media/wysiwyg/banners/Hp_section4_web_04012023_4.jpg" alt="error">
        <p>Shop Study Room =></p>
    </a>
    </div>
</div>
</div>
<div class="fryDeals">
    <h1>What The Fry Deals</h1>
    <div class="fryDeals-cards">
        <div>
            <a href="#">
            <img src="https://ii3.pepperfry.com/media/wysiwyg/banners/Home_Web_21022023_6.jpg" alt="error">
            <h3>For ₹269 at 73% off</h3>
            <p id="gray">Set of 5 Cushion Covers</p>
            </a>
        </div>
        <div>
            <a href="#">
            <img src="https://ii1.pepperfry.com/media/wysiwyg/banners/Home_Web_21022023_13.jpg" alt="error">
            <h3>For ₹119 at 88% off</h3>
            <p id="gray">Set of 3 Cup Holder </p>
            </a>
        </div>
        <div>
            <a href="#">
            <img src="https://ii2.pepperfry.com/media/wysiwyg/banners/Home_Web_21022023_14.jpg" alt="error">
            <h3>For ₹129 at 90% Off</h3>
            <p id="gray">3 Meter LED String Light</p>
            </a>
        </div>
        <div>
            <a href="#">
            <img src="https://ii3.pepperfry.com/media/wysiwyg/banners/Home_Web_21022023_11.jpg" alt="error">
            <h3>For ₹129 at 71% off</h3>
            <p id="gray">Broken Heart Natural Plant</p>
            </a>
        </div>
    </div>
</div>
<div class="inspire">
    <h1>Inspire and Get Inspired</h1>
    <a href="#">
        <h3 id="orange">View all</h3>
    </a>
</div>
<div class="trends">
    <h1>Trends In Furniture And Decor</h1>
<div class="trends-cards">
    <div>
        <a href="./product.html">
        <img src="https://ii1.pepperfry.com/media/wysiwyg/banners/Hp_section6_web_02022023_1.jpg" alt="error">
        <h3>Cozy Luxe Wing Chairs</h3>
        <p id="gray">Explore Starting ₹13999=></p>
        </a>
    </div>
    <div>
        <a href="#">
        <img src="https://ii2.pepperfry.com/media/wysiwyg/banners/Hp_section6_web_02022023_2.jpg" alt="error">
        <h3>Tactile Material Lights</h3>
        <p id="gray">Explore Starting ₹700=></p>
        </a>
    </div>
    <div>
        <a href="#">
        <img src="https://ii3.pepperfry.com/media/wysiwyg/banners/Hp_section6_web_02022023_3.jpg" alt="error">
        <h3>Eclectic Bar Furniture </h3>
        <p id="gray">Explore Starting ₹3299=></p>
        </a>
    </div>
</div>
</div>
<div class="new-Arrivals">
    <h1>New Arrivals</h1>
    <div class="new-arrivals-cards">
        <div>
            <a href="#">
                <img src="https://ii1.pepperfry.com/media/wysiwyg/banners/Hp_section7_web_02022023_1.jpg" alt="error">
                <h3>The Avylis Collection</h3>
                <p id="gray">25+ Options </p>
                <p id="gray">Starting ₹3499</p>
            </a>
        </div>
        <div>
            <a href="#">
                <img src="https://ii2.pepperfry.com/media/wysiwyg/banners/Hp_section7_web_02022023_2.jpg" alt="error">
                <h3>Vibrant Gift Sets</h3>
                <p id="gray">120+ Options</p>
                <p id="gray">Starting ₹499</p>
            </a>
        </div>
        <div>
            <a href="#">
                <img src="https://ii3.pepperfry.com/media/wysiwyg/banners/Hp_section7_web_02022023_3.jpg" alt="error">
                <h3>Wooden Wall Art</h3>
                <p id="gray">500+ Options</p>
                <p id="gray">Starting ₹249</p>
            </a>
        </div>
        <div>
            <a href="#">
                <img src="https://ii1.pepperfry.com/media/wysiwyg/banners/Hp_section7_web_02022023_4.jpg" alt="error">
                <h3>Spacious Storage Beds</h3>
                <p id="gray">45+ Options</p>
                <p id="gray">Starting ₹15799</p>
            </a>
        </div>
    </div>
</div>
<div class="getSpringReady">
    <h1>Get Spring Ready</h1>
    <div class="getSpringReady-card">
        <div>
            <a href="#">
            <img src="https://ii2.pepperfry.com/media/wysiwyg/banners/Hp_section8_web_02022023_1.jpg" alt="error">
            </a>
        </div>
        <div>
            <a href="#">
            <img src="https://ii3.pepperfry.com/media/wysiwyg/banners/Hp_section8_web_02022023_2.jpg" alt="error">
            </a>
        </div>
        <div>
            <a href="#">
            <img src="https://ii1.pepperfry.com/media/wysiwyg/banners/Hp_section8_web_02022023_3.jpg" alt="error">
            </a>
        </div>
    </div>
</div>
<div class="top-brands">
    <h1>Top Brands On Pepperfry</h1>
    <div class="brand-card">
        <div>
            <a href="#">
            <img src="https://ii2.pepperfry.com/media/wysiwyg/banners/Hp_section9_web_02022023_1.jpg" alt="error">
            <h3>Popular For Beds</h3>
            <p id="gray">240+ Options</p>
        </a>
        </div>
        <div>
            <a href="./product.html">
            <img src="https://ii3.pepperfry.com/media/wysiwyg/banners/Hp_section9_web_02022023_2.jpg" alt="error">
            <h3>Popular for Recliners</h3>
            <p id="gray">45+ Options</p>
        </a>
        </div>
        <div>
            <a href="#">
            <img src="https://ii1.pepperfry.com/media/wysiwyg/banners/Hp_topbrands_web_14feb_3.jpg" alt="error">
            <h3>Popular For Lamps</h3>
            <p id="gray">480+ Options</p>
        </a>
        </div>
        <div>
            <a href="./product.html">
            <img src="https://ii2.pepperfry.com/media/wysiwyg/banners/Hp_section9_web_02022023_4.jpg" alt="error">
            <h3>Popular For Sofas</h3>
            <p id="gray">80+ Options</p>
        </a>
        </div>
    </div>
</div>
<div class="inspirationFromBlog">
    <h1>Inspiration From Our Blog</h1>
    <div class="inspiration-card">
        <div>
            <a href="#">
            <img src="https://ii3.pepperfry.com/media/wysiwyg/banners/Hp_section10_web_02022023_1.jpg" alt="error">
            <p id="gray">6 Glistening Bedroom Lighting Ideas to Enhance Your Space | Read More -> </p>
            </a>
        </div>
        <div>
            <a href="#">
            <img src="https://ii1.pepperfry.com/media/wysiwyg/banners/Hp_section10_web_02022023_2.jpg" alt="error">
            <p id="gray">Revive Those Dull Walls With 10 Brilliant Living Room Wall Decor Ideas | Read More -> </p>
            </a>
        </div>
        <div>
            <a href="#">
            <img src="https://ii2.pepperfry.com/media/wysiwyg/banners/Hp_section10_web_02022023_3.jpg" alt="error">
            <p id="gray">11 Seating Arrangements to Redefine Your Living Room Experience | Read More -></p>
            </a>
        </div>
        <div>
            <a href="#">
            <img src="https://ii3.pepperfry.com/media/wysiwyg/banners/Hp_section10_web_02022023_4.jpg" alt="error">
            <p id="gray">No cliches for Valentine's day, plan a night in with your better half | Read More -></p>
            </a>
        </div>
    </div>
</div>
<div class="customers-speak">
    <h1>Customers Speak</h1>
    <div class="customers-card">
        <div>
            <img src="https://ii1.pepperfry.com/media/wysiwyg/banners/Testimonial_web_261221_7.jpg" alt="error">
            <p>Bought these two grey puffy stools from pepperfry. Found them to be surprisingly strong! Blends perfectly with our theme, too!</p>
            <p>Suman Senapatia</p>
            <p id="gray-small">Visakhapatnam</p>
        </div>
        <div>
            <img src="https://ii3.pepperfry.com/media/wysiwyg/banners/happy_customer_block_2_2906_0222.png" alt="error">
            <p>I purchased Candy Study Chair in Pink Colour by Alex Daisy from pepperfry looks awesome and My daughter loves and spend...</p>
            <p>Satya Madhana</p>
            <p id="gray-small">Secunderabad</p>
        </div>
        <div>
            <img src="https://ii2.pepperfry.com/media/wysiwyg/banners/Testimonial_web_261221_9.jpg" alt="error">
            <p>Purchased an ergonomic chair, I thought it would not be fitting for me but once it got delivered, got it assembled then and there...</p>
            <p>Baba Kattubadi</p>
            <p id="gray-small">Hyderabad</p>
        </div>
    </div>
</div>
<div class="help">
    <h1>Need Help Buying?</h1>
    <div class="help-card">
        <div>
            <a href="#">
            <img src="https://ii1.pepperfry.com/media/wysiwyg/banners/hp_need_help_p_1.jpg" alt="error">
            <p>Here's How To Choose The Right Sofa</p>
            </a>
        </div>
        <div>
            <a href="#">
            <img src="https://ii2.pepperfry.com/media/wysiwyg/banners/hp_need_help_p_2.jpg" alt="error">
            <p>How To Buy A Perfect Bed For Your Room</p>
            </a>
        </div>
        <div>
            <a href="#">
            <img src="https://ii3.pepperfry.com/media/wysiwyg/banners/hp_need_help_p_3.jpg" alt="error">
            <p>Your Guide To Buy The Perfect Mattress</p>
            </a>
        </div>
        <div>
            <a href="#">
            <img src="https://ii1.pepperfry.com/media/wysiwyg/banners/hp_need_help_p_4.jpg" alt="error">
            <p>Everything About Cabinets And Sideboards </p>
            </a>
        </div>
        <div>
            <a href="#">
            <img src="https://ii2.pepperfry.com/media/wysiwyg/banners/hp_need_help_p_5.jpg" alt="error">
            <p>What To Look For While Buying A Chair</p>
            </a>
        </div>
        <div>
            <a href="#">
            <img src="https://ii3.pepperfry.com/media/wysiwyg/banners/hp_need_help_p_6.jpg" alt="error">
            </a>
        </div>
    </div>
</div>
<div class="recently-viewed">
    <h1>Recently Viewed</h1>
    <div class="recently-viewed-card">
        <div>
            <a href="#">
            <img src="https://ii1.pepperfry.com/media/catalog/product/g/r/494x544/green-cotton-screen-printed-hand-woven-7-x-2-feet-dhurrie-by-art-india-green-cotton-screen-printed-h-9vgyww.jpg" alt="error">
            <p>Multicolor Cotton 84 x 24 Inches Hand Woven Floor Runner by Art India</p>
            <p id="price">₹ 549</p>
            </a>
        </div>
    </div>
</div>



<div class="footer">
    <div class="top">
        <div>
            <h3>Useful Links</h3>
            <a href="#"><p>About Us</p></a>
            <a href="#"><p>Our Blog</p></a>
            <a href="#"><p>Careers</p></a>
            <a href="#"><p>Corporate Governance</p></a>
            <a href="#"><p>Pepperfry In the News</p></a>
            <a href="#"><p>Find A Studio</p></a>
            <a href="#"><p>Gift Cards</p></a>
            <a href="#"><p>Brands</p></a>
            <a href="#"><p>Customer Reviews</p></a>
        </div>
        <div>
            <h3>Partners</h3>
            <a href="#"><p>Sell With Us</p></a>
            <a href="#"><p>Become a Franchisee</p></a>
            <a href="#"><p>Become a Pep Homie</p></a>
            <a href="#"><p>Design For Us</p></a>
            <a href="#"><p>Pepperfry Marketplace Policies</p></a>
            <a href="#"><p>Login to Your Merchant Dashboard</p></a>
            <a href="#"><p>Important : GST and You</p></a>
            <a href="#"><p>Corporate Enquiries</p></a>
        </div>
        <div>
            <h3>Need Help?</h3>
            <a href="#"><p>Contact Us</p></a>
            <a href="#"><p>Returns & Refund</p></a>
            <a href="#"><p>Track Your Order</p></a>
            <a href="#"><p>FAQs</p></a>
            <a href="#"><p>Buy on Phone</p></a>
        </div>
        <div>
            <a href="https://play.google.com/store/apps/details?id=com.app.pepperfry&pli=1"><img src="./images/downloadApp.jpg" alt="error"></a>
            
        </div>
    </div>
    <div class="bottom">
        <div>
            <h3>Popular Categories</h3>
            <a href="#">
            <p>Queen Size Beds, King Size Beds, Coffee Tables, Dining Sets, Recliners, Sofa cum Beds, Rocking Chairs, Cabinets, Book Shelves, TV Unit, Wardrobes, Outdoor Furniture, Bar Cabinets, Wall Shelves, Photo Frames, Bed Sheets, Mattresses, Table Cloth, Living Room Furniture, Study Tables, Dining Room Furniture, Office Furniture, Bed Room Furniture, Dining Table, Beds, Sofas, Sofa Set, Trundle Bed</p>
            </a>
        </div>
        <div>
            <h3>Popular Brands</h3>
            <a href="#">
            <p>Mintwud, Woodsworth, CasaCraft, Amberville, Mudramark, Bohemiana, Clouddio, Spacewood, Durian, Green Soul, Godrej Interio, Nilkamal, Orange Tree , HomeTown , Duroflex , Sleepyhead , Peps India , NestAsia , Jaipur Rugs , Obettee , Eliante by Jainsons , @Home, Kapoor E Illuminaton , Ellementry , Chumbak , Philips , Jaipur Fabric , Maspar , India Circus by Krsnaa Mehta</p>
            </a>
        </div>
        <div>
            <h3>Cities we deliver to</h3>
            <a href="#">
            <p>Bengaluru, Mumbai, Navi Mumbai, Delhi, Hyderabad, Pune, Chennai, Gurgaon, Kolkata, Noida, Goa, Ghaziabad, Ahmedabad, Coimbatore, Faridabad, Jaipur, Lucknow, Kochi, Visakhapatnam, Chandigarh, Vadodara, Nagpur, Thiruvananthapuram, Indore, Mysore, Bhopal, Surat, Jalandhar, Patna, Ludhiana, Nashik, Madurai, Kanpur, Aurangabad and many more</p>
            </a>
        </div>
    </div>
    <hr>
    <div class="accept">
        <div>
        <h3>We accept</h3>
        <a href="#">
        <img src="./images/cards.jpg" alt="error">
        </a>
        </div>
        <div>
            <h3>Like what you see? You'll like us even more here</h3>
            <a href="#">
            <img src="./images/apps.jpg" alt="error">
            </a>
        </div>
    </div>
    <hr>
    <div class="ending">
        <div>
            
            <a href="#"><p>Buy In Bulk</p></a>
            <a href="#"><p>Write A Testimonial</p></a>
        </div>
        <div>
            <a href="#"><p>Whitehat</p></a>
            <a href="#"><p>Site Map</p></a>
            <a href="#"><p>Terms Of Use</p></a>
            <a href="#"><p>Privacy Policy</p></a>
            <a href="#"><p>Your Data & Security</p></a>
            <a href="#"><p>Grievance Redressal</p></a>
        </div>
    </div>
</div>

</body>
<script>
    let counter=1;
    setInterval(function(){
       document.getElementById("radio" + counter).checked = true; 
       counter++;
       if(counter > 4){
        counter = 1;
       }
    },2500);
</script>
</html>

