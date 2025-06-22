<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amul - Products</title>    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Site-specific styling -->
    <link rel="stylesheet" href="style.css">
    <!-- Mobile optimization CSS -->
    <link rel="stylesheet" href="mobile-fixes.css">
    <!-- InfinityFree compatibility fixes -->
    <link rel="stylesheet" href="infinity-compatibility.css">
</head>
<body>

<?php include 'header.php'; ?>

<div class="floating-background">
    <div class="ice-cream cone"></div>
    <div class="ice-cream cup"></div>
    <div class="ice-cream candy"></div>
    <div class="ice-cream cone reversed"></div>
    <div class="ice-cream cup reversed"></div>
    <div class="ice-cream candy reversed"></div>
    <div class="ice-cream cone"></div>
    <div class="ice-cream cup"></div>
    <div class="ice-cream candy"></div>
    <div class="ice-cream cone reversed"></div>
</div>

<main class="container py-5" id="main-content">
    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="content-card animate__animated animate__fadeIn">
                <h1 class="text-center mb-4 animate__animated animate__fadeInDown">Our Products</h1>
                
                <div class="alert alert-info text-center mb-4 animate__animated animate__fadeIn animate__delay-1s">
                    <i class="bi bi-info-circle-fill me-2"></i> Note: All products may not be available at all times. Please check with the store for current stock.
                </div>
                
                <!-- Product Categories Tabs -->
                <ul class="nav nav-pills mb-4 justify-content-center animate__animated animate__fadeIn animate__delay-1s" id="productTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active mx-1" id="ice-cream-tab" data-bs-toggle="pill" data-bs-target="#ice-cream" type="button" role="tab">
                            <i class="bi bi-snow2"></i> Ice Creams
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link mx-1" id="butter-cheese-tab" data-bs-toggle="pill" data-bs-target="#butter-cheese" type="button" role="tab">
                            <i class="bi bi-egg-fried"></i> Butter & Cheese
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link mx-1" id="milk-tab" data-bs-toggle="pill" data-bs-target="#milk" type="button" role="tab">
                            <i class="bi bi-cup-hot"></i> Milk Products
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link mx-1" id="beverages-tab" data-bs-toggle="pill" data-bs-target="#beverages" type="button" role="tab">
                            <i class="bi bi-cup-straw"></i> Beverages
                        </button>
                    </li>
                </ul>
                
                <!-- Product Content -->
                <div class="tab-content animate__animated animate__fadeIn animate__delay-2s" id="productTabContent">
                    <!-- Ice Cream Tab -->
                    <div class="tab-pane fade show active" id="ice-cream" role="tabpanel">
                        <!-- Ice Cream Categories -->
                        <div class="d-flex flex-wrap justify-content-center mb-4">
                            <button class="btn btn-outline-primary m-1 ice-cream-filter active" data-filter="all">All</button>
                            <button class="btn btn-outline-primary m-1 ice-cream-filter" data-filter="cups">Cups</button>
                            <button class="btn btn-outline-primary m-1 ice-cream-filter" data-filter="cones">Cones</button>
                            <button class="btn btn-outline-primary m-1 ice-cream-filter" data-filter="family">Family Packs</button>
                            <button class="btn btn-outline-primary m-1 ice-cream-filter" data-filter="bars">Ice Cream Bars</button>
                            <button class="btn btn-outline-primary m-1 ice-cream-filter" data-filter="novelty">Novelties</button>
                        </div>
                        
                        <!-- Ice Cream Products -->
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-4">
                            <!-- Cup Products -->
                            <div class="col ice-cream-item cups">
                                <div class="card h-100 product-card animate-hover">
                                    <div class="position-relative">
                                        <img src="images/Amul-Cup-Vanilla-Royale.jpg" class="card-img-top p-3" alt="Vanilla Ice Cream">
                                        <span class="badge bg-danger position-absolute top-0 end-0 m-2">Bestseller</span>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Vanilla Ice Cream</h5>
                                        <p class="card-text">Rich and creamy vanilla ice cream made with the finest ingredients.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">100ml</span>
                                                <span class="badge bg-light text-dark">500ml</span>
                                            </div>
                                            <span class="price fw-bold">₹25 - ₹160</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col ice-cream-item cups">
                                <div class="card h-100 product-card animate-hover">
                                    <img src="images/Chocolate Ice Cream.jpg" class="card-img-top p-3" alt="Chocolate Ice Cream">
                                    <div class="card-body">
                                        <h5 class="card-title">Chocolate Ice Cream</h5>
                                        <p class="card-text">Creamy chocolate ice cream made with real cocoa for rich flavor.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">100ml</span>
                                                <span class="badge bg-light text-dark">500ml</span>
                                            </div>
                                            <span class="price fw-bold">₹30 - ₹180</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col ice-cream-item cups">
                                <div class="card h-100 product-card animate-hover">
                                    <img src="images/Butterscotch Ice Cream.jpg" class="card-img-top p-3" alt="Butterscotch Ice Cream">
                                    <div class="card-body">
                                        <h5 class="card-title">Butterscotch Ice Cream</h5>
                                        <p class="card-text">Creamy butterscotch flavored ice cream with caramel swirls.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">100ml</span>
                                                <span class="badge bg-light text-dark">500ml</span>
                                            </div>
                                            <span class="price fw-bold">₹30 - ₹180</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Cone Products -->
                            <div class="col ice-cream-item cones">
                                <div class="card h-100 product-card animate-hover">
                                    <div class="position-relative">
                                        <img src="images/Chocolate Cone.jpg" class="card-img-top p-3" alt="Chocolate Cone">
                                        <span class="badge bg-primary position-absolute top-0 end-0 m-2">Popular</span>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Chocolate Cone</h5>
                                        <p class="card-text">Delicious chocolate ice cream in a crispy wafer cone with chocolate sauce.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">120ml</span>
                                            </div>
                                            <span class="price fw-bold">₹40</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col ice-cream-item cones">
                                <div class="card h-100 product-card animate-hover">
                                    <img src="images/Butterscotch Cone.jpg" class="card-img-top p-3" alt="Butterscotch Cone">
                                    <div class="card-body">
                                        <h5 class="card-title">Butterscotch Cone</h5>
                                        <p class="card-text">Creamy butterscotch ice cream in a crunchy wafer cone with butterscotch pieces.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">120ml</span>
                                            </div>
                                            <span class="price fw-bold">₹40</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Family Pack Products -->
                            <div class="col ice-cream-item family">
                                <div class="card h-100 product-card animate-hover">
                                    <div class="position-relative">
                                        <img src="images/Rajbhog Ice Cream.jpg" class="card-img-top p-3" alt="Rajbhog Ice Cream">
                                        <span class="badge bg-success position-absolute top-0 end-0 m-2">New</span>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Rajbhog Ice Cream</h5>
                                        <p class="card-text">Royal Indian dessert-inspired ice cream with saffron and dry fruits.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">1L</span>
                                            </div>
                                            <span class="price fw-bold">₹220</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col ice-cream-item family">
                                <div class="card h-100 product-card animate-hover">
                                    <img src="images/Kesar Pista Ice Cream.jpg" class="card-img-top p-3" alt="Kesar Pista Ice Cream">
                                    <div class="card-body">
                                        <h5 class="card-title">Kesar Pista Ice Cream</h5>
                                        <p class="card-text">Rich saffron ice cream with chunks of pistachios, a perfect Indian dessert.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">1L</span>
                                            </div>
                                            <span class="price fw-bold">₹230</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Ice Cream Bars -->
                            <div class="col ice-cream-item bars">
                                <div class="card h-100 product-card animate-hover">
                                    <img src="images/Chocobar.jpg" class="card-img-top p-3" alt="Chocolate Bar">
                                    <div class="card-body">
                                        <h5 class="card-title">Chocobar</h5>
                                        <p class="card-text">Classic vanilla ice cream coated with rich chocolate, on a wooden stick.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">60ml</span>
                                            </div>
                                            <span class="price fw-bold">₹30</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col ice-cream-item bars">
                                <div class="card h-100 product-card animate-hover">
                                    <img src="images/Almond Bar.jpg" class="card-img-top p-3" alt="Almond Bar">
                                    <div class="card-body">
                                        <h5 class="card-title">Almond Bar</h5>
                                        <p class="card-text">Premium vanilla ice cream coated with chocolate and crunchy almonds.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">75ml</span>
                                            </div>
                                            <span class="price fw-bold">₹50</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Additional Cup Products -->
                            <div class="col ice-cream-item cups">
                                <div class="card h-100 product-card animate-hover">
                                    <img src="images/Strawberry Ice Cream.jpg" class="card-img-top p-3" alt="Strawberry Ice Cream">
                                    <div class="card-body">
                                        <h5 class="card-title">Strawberry Ice Cream</h5>
                                        <p class="card-text">Delicious strawberry flavored ice cream with real fruit pieces.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">100ml</span>
                                                <span class="badge bg-light text-dark">500ml</span>
                                            </div>
                                            <span class="price fw-bold">₹30 - ₹180</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col ice-cream-item cups">
                                <div class="card h-100 product-card animate-hover">
                                    <img src="images/Black Currant Ice Cream.jpg" class="card-img-top p-3" alt="Black Currant Ice Cream">
                                    <div class="card-body">
                                        <h5 class="card-title">Black Currant Ice Cream</h5>
                                        <p class="card-text">Rich and fruity black currant ice cream, a perfect dessert.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">100ml</span>
                                                <span class="badge bg-light text-dark">500ml</span>
                                            </div>
                                            <span class="price fw-bold">₹35 - ₹190</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Additional Cone Products -->
                            <div class="col ice-cream-item cones">
                                <div class="card h-100 product-card animate-hover">
                                    <img src="images/Strawberry Cone.jpg" class="card-img-top p-3" alt="Strawberry Cone">
                                    <div class="card-body">
                                        <h5 class="card-title">Strawberry Cone</h5>
                                        <p class="card-text">Sweet strawberry ice cream in a crispy wafer cone.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">120ml</span>
                                            </div>
                                            <span class="price fw-bold">₹40</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col ice-cream-item cones">
                                <div class="card h-100 product-card animate-hover">
                                    <div class="position-relative">
                                        <img src="images/Tricone.jpg" class="card-img-top p-3" alt="Tricone">
                                        <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-2">Special</span>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Tricone</h5>
                                        <p class="card-text">Triple delight with three flavors - vanilla, strawberry & chocolate in one cone.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">120ml</span>
                                            </div>
                                            <span class="price fw-bold">₹50</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Additional Family Pack Products -->
                            <div class="col ice-cream-item family">
                                <div class="card h-100 product-card animate-hover">
                                    <img src="images/Chocolate Chip Ice Cream.jpg" class="card-img-top p-3" alt="Chocolate Chip Ice Cream">
                                    <div class="card-body">
                                        <h5 class="card-title">Chocolate Chip Ice Cream</h5>
                                        <p class="card-text">Creamy vanilla ice cream loaded with chocolate chips.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">1L</span>
                                            </div>
                                            <span class="price fw-bold">₹220</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col ice-cream-item family">
                                <div class="card h-100 product-card animate-hover">
                                    <img src="images/Tutti Frutti Ice Cream.jpg" class="card-img-top p-3" alt="Tutti Frutti Ice Cream">
                                    <div class="card-body">
                                        <h5 class="card-title">Tutti Frutti Ice Cream</h5>
                                        <p class="card-text">Delicious ice cream with colorful candied fruits, a children's favorite.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">1L</span>
                                            </div>
                                            <span class="price fw-bold">₹210</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Additional Ice Cream Bars -->
                            <div class="col ice-cream-item bars">
                                <div class="card h-100 product-card animate-hover">
                                    <img src="images/Orange Bar.jpg" class="card-img-top p-3" alt="Orange Bar">
                                    <div class="card-body">
                                        <h5 class="card-title">Orange Bar</h5>
                                        <p class="card-text">Refreshing orange-flavored ice candy, perfect for summer.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">60ml</span>
                                            </div>
                                            <span class="price fw-bold">₹20</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col ice-cream-item bars">
                                <div class="card h-100 product-card animate-hover">
                                    <div class="position-relative">
                                        <img src="images/Chocolate Royale.jpg" class="card-img-top p-3" alt="King Cone">
                                        <span class="badge bg-primary position-absolute top-0 end-0 m-2">Premium</span>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Chocolate Royale</h5>
                                        <p class="card-text">Premium chocolate bar with rich cocoa coating and creamy chocolate inside.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">80ml</span>
                                            </div>
                                            <span class="price fw-bold">₹60</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Novelty Ice Creams -->
                            <div class="col ice-cream-item novelty">
                                <div class="card h-100 product-card animate-hover">
                                    <img src="images/Ice Cream Sandwich.jpg" class="card-img-top p-3" alt="Ice Cream Sandwich">
                                    <div class="card-body">
                                        <h5 class="card-title">Ice Cream Sandwich</h5>
                                        <p class="card-text">Vanilla ice cream sandwiched between two chocolate biscuits.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">90ml</span>
                                            </div>
                                            <span class="price fw-bold">₹35</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col ice-cream-item novelty">
                                <div class="card h-100 product-card animate-hover">
                                    <div class="position-relative">
                                        <img src="images/Ice Cream Cake.jpg" class="card-img-top p-3" alt="Ice Cream Cake">
                                        <span class="badge bg-danger position-absolute top-0 end-0 m-2">Special Order</span>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Ice Cream Cake</h5>
                                        <p class="card-text">Celebration cake made with layers of premium ice cream. Pre-order required.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">500g</span>
                                                <span class="badge bg-light text-dark">1kg</span>
                                            </div>
                                            <span class="price fw-bold">₹450 - ₹850</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Butter & Cheese Tab -->
                    <div class="tab-pane fade" id="butter-cheese" role="tabpanel">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-4">
                            <!-- Butter Products -->
                            <div class="col">
                                <div class="card h-100 product-card animate-hover">
                                    <div class="position-relative">
                                        <img src="images/Amul Butter.jpg" class="card-img-top p-3" alt="Amul Butter">
                                        <span class="badge bg-danger position-absolute top-0 end-0 m-2">Popular</span>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Amul Butter</h5>
                                        <p class="card-text">The iconic Amul Butter, perfect for spreading on bread, toast or paratha.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">100g</span>
                                                <span class="badge bg-light text-dark">500g</span>
                                            </div>
                                            <span class="price fw-bold">₹55 - ₹245</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Cheese Products -->
                            <div class="col">
                                <div class="card h-100 product-card animate-hover">
                                    <div class="position-relative">
                                        <img src="images/Amul Cheese Block.jpg" class="card-img-top p-3" alt="Cheese Block">
                                        <span class="badge bg-primary position-absolute top-0 end-0 m-2">Bestseller</span>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Amul Cheese Block</h5>
                                        <p class="card-text">Processed cheese block, perfect for sandwiches, toast and cooking.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">200g</span>
                                                <span class="badge bg-light text-dark">500g</span>
                                            </div>
                                            <span class="price fw-bold">₹115 - ₹265</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col">
                                <div class="card h-100 product-card animate-hover">
                                    <img src="images/Amul Cheese Slices.jpg" class="card-img-top p-3" alt="Cheese Slices">
                                    <div class="card-body">
                                        <h5 class="card-title">Amul Cheese Slices</h5>
                                        <p class="card-text">Individually wrapped cheese slices perfect for burgers and sandwiches.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">100g (5 slices)</span>
                                                <span class="badge bg-light text-dark">200g (10 slices)</span>
                                            </div>
                                            <span class="price fw-bold">₹65 - ₹125</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col">
                                <div class="card h-100 product-card animate-hover">
                                    <img src="images/Amul Cheese Spread.jpg" class="card-img-top p-3" alt="Cheese Spread">
                                    <div class="card-body">
                                        <h5 class="card-title">Amul Cheese Spread</h5>
                                        <p class="card-text">Creamy cheese spread, perfect for bread, crackers and sandwiches.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">200g</span>
                                            </div>
                                            <span class="price fw-bold">₹90</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Additional Butter Products -->
                            <div class="col">
                                <div class="card h-100 product-card animate-hover">
                                    <img src="images/Amul Lite Butter.jpg" class="card-img-top p-3" alt="Amul Lite Butter">
                                    <div class="card-body">
                                        <h5 class="card-title">Amul Lite Butter</h5>
                                        <p class="card-text">Low-fat butter spread with 25% less fat than regular butter.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">100g</span>
                                                <span class="badge bg-light text-dark">500g</span>
                                            </div>
                                            <span class="price fw-bold">₹50 - ₹235</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Additional Cheese Products -->
                            <div class="col">
                                <div class="card h-100 product-card animate-hover">
                                    <div class="position-relative">
                                        <img src="images/Mozzarella Cheese.jpg" class="card-img-top p-3" alt="Mozzarella Cheese">
                                        <span class="badge bg-success position-absolute top-0 end-0 m-2">Popular</span>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Mozzarella Cheese</h5>
                                        <p class="card-text">Ideal for pizzas, pastas and other Italian dishes.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">200g</span>
                                                <span class="badge bg-light text-dark">1kg</span>
                                            </div>
                                            <span class="price fw-bold">₹130 - ₹580</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col">
                                <div class="card h-100 product-card animate-hover">
                                    <img src="images/Pizza Cheese.jpg" class="card-img-top p-3" alt="Pizza Cheese">
                                    <div class="card-body">
                                        <h5 class="card-title">Pizza Cheese</h5>
                                        <p class="card-text">Special blend of cheese perfect for homemade pizzas.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">200g</span>
                                                <span class="badge bg-light text-dark">500g</span>
                                            </div>
                                            <span class="price fw-bold">₹125 - ₹290</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Paneer Products -->
                            <div class="col">
                                <div class="card h-100 product-card animate-hover">
                                    <div class="position-relative">
                                        <img src="images/Amul Paneer.jpg" class="card-img-top p-3" alt="Amul Paneer">
                                        <span class="badge bg-primary position-absolute top-0 end-0 m-2">Essential</span>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Amul Paneer</h5>
                                        <p class="card-text">Fresh and soft cottage cheese, ideal for Indian recipes.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">200g</span>
                                                <span class="badge bg-light text-dark">500g</span>
                                                <span class="badge bg-light text-dark">1kg</span>
                                            </div>
                                            <span class="price fw-bold">₹80 - ₹340</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col">
                                <div class="card h-100 product-card animate-hover">
                                    <img src="images/Malai Paneer.jpg" class="card-img-top p-3" alt="Malai Paneer">
                                    <div class="card-body">
                                        <h5 class="card-title">Malai Paneer</h5>
                                        <p class="card-text">Premium paneer with higher fat content for richer taste.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">200g</span>
                                            </div>
                                            <span class="price fw-bold">₹90</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Milk Products Tab -->
                    <div class="tab-pane fade" id="milk" role="tabpanel">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-4">
                            <!-- Milk Products -->
                            <div class="col">
                                <div class="card h-100 product-card animate-hover">
                                    <div class="position-relative">
                                        <img src="images/Amul Gold Milk.jpg" class="card-img-top p-3" alt="Amul Gold Milk">
                                        <span class="badge bg-danger position-absolute top-0 end-0 m-2">Essential</span>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Amul Gold Milk</h5>
                                        <p class="card-text">Full cream milk with 4.5% fat and 8.5% SNF content.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">500ml</span>
                                                <span class="badge bg-light text-dark">1L</span>
                                            </div>
                                            <span class="price fw-bold">₹33 - ₹65</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col">
                                <div class="card h-100 product-card animate-hover">
                                    <div class="position-relative">
                                        <img src="images/Amul Taaza Milk.jpg" class="card-img-top p-3" alt="Amul Taaza Milk">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Amul Taaza Milk</h5>
                                        <p class="card-text">Toned milk with 3% fat and 8.5% SNF content.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">500ml</span>
                                                <span class="badge bg-light text-dark">1L</span>
                                            </div>
                                            <span class="price fw-bold">₹25 - ₹49</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col">
                                <div class="card h-100 product-card animate-hover">
                                    <div class="position-relative">
                                        <img src="images/Amul Kadhai Dudh.jpg" class="card-img-top p-3" alt="Amul Kadhai Dudh">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Amul Kadhai Dudh</h5>
                                        <p class="card-text">Traditional milk with the goodness of saffron, cardamom and other spices.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">200ml</span>
                                            </div>
                                            <span class="price fw-bold">₹30</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Yogurt Products -->
                            <div class="col">
                                <div class="card h-100 product-card animate-hover">
                                    <div class="position-relative">
                                        <img src="images/Amul Masti Dahi.jpg" class="card-img-top p-3" alt="Amul Dahi">
                                        <span class="badge bg-primary position-absolute top-0 end-0 m-2">Daily Essential</span>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Amul Masti Dahi</h5>
                                        <p class="card-text">Fresh curd made from pasteurized milk, rich in protein and calcium.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">200g</span>
                                                <span class="badge bg-light text-dark">400g</span>
                                                <span class="badge bg-light text-dark">1kg</span>
                                            </div>
                                            <span class="price fw-bold">₹25 - ₹95</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Additional Milk Products -->
                            <div class="col">
                                <div class="card h-100 product-card animate-hover">
                                    <img src="images/Slim & Trim Milk.jpg" class="card-img-top p-3" alt="Slim & Trim Milk">
                                    <div class="card-body">
                                        <h5 class="card-title">Slim & Trim Milk</h5>
                                        <p class="card-text">Double toned milk with only 0.5% fat, ideal for weight watchers.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">500ml</span>
                                                <span class="badge bg-light text-dark">1L</span>
                                            </div>
                                            <span class="price fw-bold">₹22 - ₹44</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col">
                                <div class="card h-100 product-card animate-hover">
                                    <img src="images/Amul Shakti Milk.jpg" class="card-img-top p-3" alt="Amul Shakti Milk">
                                    <div class="card-body">
                                        <h5 class="card-title">Amul Shakti Milk</h5>
                                        <p class="card-text">Toned milk enriched with vitamins A & D for better nutrition.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">500ml</span>
                                                <span class="badge bg-light text-dark">1L</span>
                                            </div>
                                            <span class="price fw-bold">₹27 - ₹53</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Ghee Products -->
                            <div class="col">
                                <div class="card h-100 product-card animate-hover">
                                    <div class="position-relative">
                                        <img src="images/Amul Pure Ghee.jpg" class="card-img-top p-3" alt="Amul Pure Ghee">
                                        <span class="badge bg-danger position-absolute top-0 end-0 m-2">Bestseller</span>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Amul Pure Ghee</h5>
                                        <p class="card-text">Pure clarified butter made from fresh cream, ideal for Indian cooking.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">200ml</span>
                                                <span class="badge bg-light text-dark">500ml</span>
                                                <span class="badge bg-light text-dark">1L</span>
                                            </div>
                                            <span class="price fw-bold">₹120 - ₹550</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col">
                                <div class="card h-100 product-card animate-hover">
                                    <img src="images/Amul Mithai Mate.jpg" class="card-img-top p-3" alt="Amul Mithai Mate">
                                    <div class="card-body">
                                        <h5 class="card-title">Amul Mithai Mate</h5>
                                        <p class="card-text">Sweetened condensed milk, perfect for desserts and sweets.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">200g</span>
                                                <span class="badge bg-light text-dark">400g</span>
                                            </div>
                                            <span class="price fw-bold">₹65 - ₹125</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Additional Yogurt Products -->
                            <div class="col">
                                <div class="card h-100 product-card animate-hover">
                                    <img src="images/Fruit Yogurt.jpg" class="card-img-top p-3" alt="Fruit Yogurt">
                                    <div class="card-body">
                                        <h5 class="card-title">Fruit Yogurt</h5>
                                        <p class="card-text">Delicious yogurt with real fruit pieces, available in various flavors.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">100g</span>
                                            </div>
                                            <span class="price fw-bold">₹25</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col">
                                <div class="card h-100 product-card animate-hover">
                                    <img src="images/Amul Shrikhand.jpg" class="card-img-top p-3" alt="Amul Shrikhand">
                                    <div class="card-body">
                                        <h5 class="card-title">Amul Shrikhand</h5>
                                        <p class="card-text">Traditional sweet yogurt dessert, available in various flavors.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">100g</span>
                                                <span class="badge bg-light text-dark">500g</span>
                                            </div>
                                            <span class="price fw-bold">₹30 - ₹140</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Beverages Tab -->
                    <div class="tab-pane fade" id="beverages" role="tabpanel">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-4">
                            <!-- Beverages Products -->
                            <div class="col">
                                <div class="card h-100 product-card animate-hover">
                                    <div class="position-relative">
                                        <img src="images/Amul Lassi.jpg" class="card-img-top p-3" alt="Amul Lassi">
                                        <span class="badge bg-success position-absolute top-0 end-0 m-2">Refreshing</span>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Amul Lassi</h5>
                                        <p class="card-text">Traditional yogurt-based drink, available in sweet and mango flavors.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">200ml</span>
                                                <span class="badge bg-light text-dark">1L</span>
                                            </div>
                                            <span class="price fw-bold">₹20 - ₹80</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col">
                                <div class="card h-100 product-card animate-hover">
                                    <div class="position-relative">
                                        <img src="images/Amul Chaas.jpg" class="card-img-top p-3" alt="Amul Chaas">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Amul Chaas</h5>
                                        <p class="card-text">Refreshing buttermilk with spices, perfect for hot summer days.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">200ml</span>
                                                <span class="badge bg-light text-dark">1L</span>
                                            </div>
                                            <span class="price fw-bold">₹15 - ₹65</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col">
                                <div class="card h-100 product-card animate-hover">
                                    <div class="position-relative">
                                        <img src="images/Amul Kool.jpg" class="card-img-top p-3" alt="Amul Kool">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Amul Kool</h5>
                                        <p class="card-text">Refreshing milk-based drink available in various flavors like chocolate, coffee, and more.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">200ml</span>
                                            </div>
                                            <span class="price fw-bold">₹25</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Additional Lassi Products -->
                            <div class="col">
                                <div class="card h-100 product-card animate-hover">
                                    <img src="images/Mango Lassi.jpg" class="card-img-top p-3" alt="Amul Mango Lassi">
                                    <div class="card-body">
                                        <h5 class="card-title">Mango Lassi</h5>
                                        <p class="card-text">Refreshing yogurt drink with real mango pulp and sweeteners.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">200ml</span>
                                                <span class="badge bg-light text-dark">1L</span>
                                            </div>
                                            <span class="price fw-bold">₹25 - ₹90</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col">
                                <div class="card h-100 product-card animate-hover">
                                    <img src="images/Rose Lassi.jpg" class="card-img-top p-3" alt="Amul Rose Lassi">
                                    <div class="card-body">
                                        <h5 class="card-title">Rose Lassi</h5>
                                        <p class="card-text">Traditional lassi with rose flavor, refreshing and delicious.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">200ml</span>
                                                <span class="badge bg-light text-dark">1L</span>
                                            </div>
                                            <span class="price fw-bold">₹20 - ₹85</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Amul Kool Products -->
                            <div class="col">
                                <div class="card h-100 product-card animate-hover">
                                    <div class="position-relative">
                                        <img src="images/Amul Kool Chocolate.jpg" class="card-img-top p-3" alt="Amul Kool Chocolate">
                                        <span class="badge bg-primary position-absolute top-0 end-0 m-2">Popular</span>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Amul Kool Chocolate</h5>
                                        <p class="card-text">Refreshing chocolate flavored milk, perfect for a quick energy boost.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">200ml</span>
                                                <span class="badge bg-light text-dark">1L</span>
                                            </div>
                                            <span class="price fw-bold">₹25 - ₹90</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col">
                                <div class="card h-100 product-card animate-hover">
                                    <div class="position-relative">
                                        <img src="images/Amul Kool Cafe.jpg" class="card-img-top p-3" alt="Amul Kool Cafe">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Amul Kool Cafe</h5>
                                        <p class="card-text">Coffee flavored milk drink, perfect for coffee lovers on the go.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">200ml</span>
                                            </div>
                                            <span class="price fw-bold">₹25</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col">
                                <div class="card h-100 product-card animate-hover">
                                    <img src="images/Amul Kool Kesar.jpg" class="card-img-top p-3" alt="Amul Kool Kesar">
                                    <div class="card-body">
                                        <h5 class="card-title">Amul Kool Kesar</h5>
                                        <p class="card-text">Saffron flavored milk drink, with the royal taste of kesar.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">200ml</span>
                                            </div>
                                            <span class="price fw-bold">₹25</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col">
                                <div class="card h-100 product-card animate-hover">
                                    <img src="images/Amul Kool Elaichi.jpg" class="card-img-top p-3" alt="Amul Kool Elaichi">
                                    <div class="card-body">
                                        <h5 class="card-title">Amul Kool Elaichi</h5>
                                        <p class="card-text">Cardamom flavored milk drink, refreshing and aromatic.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="sizes">
                                                <span class="badge bg-light text-dark">200ml</span>
                                            </div>
                                            <span class="price fw-bold">₹25</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Product Availability Notice -->
                <div class="alert alert-warning mt-4 text-center animate__animated animate__fadeIn animate__delay-3s">
                    <h5><i class="bi bi-exclamation-triangle me-2"></i> Please Note</h5>
                    <p class="mb-2">Product availability may vary. For specific inquiries or to check stock, please contact us at <strong>+91-9890377098</strong>.</p>
                    <a href="enquiry.php" class="btn btn-primary mt-2">
                        <i class="bi bi-question-circle me-2"></i> Submit Product Enquiry
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- InfinityFree compatibility fixes -->
<script src="infinity-fixes.js"></script>

<!-- Product Filter Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Product filtering
        const filterButtons = document.querySelectorAll('.ice-cream-filter');
        const items = document.querySelectorAll('.ice-cream-item');
        
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');
                
                const filterValue = this.getAttribute('data-filter');
                
                items.forEach(item => {
                    if (filterValue === 'all' || item.classList.contains(filterValue)) {
                        item.style.display = 'block';
                        // Add animation
                        item.classList.add('animate__animated', 'animate__fadeIn');
                        setTimeout(() => {
                            item.classList.remove('animate__animated', 'animate__fadeIn');
                        }, 500);
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    });
</script>
</body>
</html>