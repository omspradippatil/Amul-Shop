<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutritional Information - Shree Laxmi Amul Shopiee</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Mobile optimization CSS -->
    <link rel="stylesheet" href="mobile-fixes.css">
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

<main class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="content-card animate__animated animate__fadeIn">
                <h1 class="text-center mb-4 animate__animated animate__fadeInDown">Nutritional Information</h1>
                <p class="lead text-center mb-5">Learn about the nutritional values of various Amul products to make informed choices for your diet.</p>
                
                <!-- Nutritional Info Categories Tabs -->
                <ul class="nav nav-pills mb-4 justify-content-center" id="nutritionTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="dairy-tab" data-bs-toggle="pill" data-bs-target="#dairy" type="button" role="tab">
                            <i class="bi bi-droplet"></i> Dairy Products
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="ice-cream-tab" data-bs-toggle="pill" data-bs-target="#ice-cream" type="button" role="tab">
                            <i class="bi bi-snow2"></i> Ice Creams
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="beverages-tab" data-bs-toggle="pill" data-bs-target="#beverages" type="button" role="tab">
                            <i class="bi bi-cup-straw"></i> Beverages
                        </button>
                    </li>
                </ul>
                
                <!-- Nutritional Info Content -->
                <div class="tab-content" id="nutritionTabContent">
                    <!-- Dairy Products Tab -->
                    <div class="tab-pane fade show active" id="dairy" role="tabpanel">
                        <div class="card mb-4">
                            <div class="card-header bg-primary text-white">
                                <h4 class="mb-0">Amul Milk Products</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Product</th>
                                                <th>Serving Size</th>
                                                <th>Energy (kcal)</th>
                                                <th>Protein (g)</th>
                                                <th>Fat (g)</th>
                                                <th>Carbohydrates (g)</th>
                                                <th>Calcium (mg)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Amul Gold (Full Cream Milk)</td>
                                                <td>100 ml</td>
                                                <td>75</td>
                                                <td>3.2</td>
                                                <td>4.5</td>
                                                <td>5.0</td>
                                                <td>120</td>
                                            </tr>
                                            <tr>
                                                <td>Amul Taaza (Toned Milk)</td>
                                                <td>100 ml</td>
                                                <td>58</td>
                                                <td>3.1</td>
                                                <td>3.0</td>
                                                <td>5.0</td>
                                                <td>120</td>
                                            </tr>
                                            <tr>
                                                <td>Amul Slim & Trim (Double Toned Milk)</td>
                                                <td>100 ml</td>
                                                <td>45</td>
                                                <td>3.0</td>
                                                <td>1.5</td>
                                                <td>5.0</td>
                                                <td>120</td>
                                            </tr>
                                            <tr>
                                                <td>Amul Shakti (Toned Milk with Vitamins A & D)</td>
                                                <td>100 ml</td>
                                                <td>60</td>
                                                <td>3.1</td>
                                                <td>3.0</td>
                                                <td>5.0</td>
                                                <td>120</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card mb-4">
                            <div class="card-header bg-warning text-dark">
                                <h4 class="mb-0">Amul Butter & Cheese</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Product</th>
                                                <th>Serving Size</th>
                                                <th>Energy (kcal)</th>
                                                <th>Protein (g)</th>
                                                <th>Fat (g)</th>
                                                <th>Carbohydrates (g)</th>
                                                <th>Sodium (mg)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Amul Butter</td>
                                                <td>10 g</td>
                                                <td>73</td>
                                                <td>0.1</td>
                                                <td>8.0</td>
                                                <td>0.0</td>
                                                <td>87</td>
                                            </tr>
                                            <tr>
                                                <td>Amul Lite Butter</td>
                                                <td>10 g</td>
                                                <td>55</td>
                                                <td>0.1</td>
                                                <td>6.0</td>
                                                <td>0.0</td>
                                                <td>90</td>
                                            </tr>
                                            <tr>
                                                <td>Amul Cheese Block</td>
                                                <td>20 g</td>
                                                <td>62</td>
                                                <td>4.0</td>
                                                <td>5.0</td>
                                                <td>0.1</td>
                                                <td>150</td>
                                            </tr>
                                            <tr>
                                                <td>Amul Cheese Slices</td>
                                                <td>20 g (1 slice)</td>
                                                <td>60</td>
                                                <td>4.0</td>
                                                <td>4.8</td>
                                                <td>0.1</td>
                                                <td>155</td>
                                            </tr>
                                            <tr>
                                                <td>Amul Cheese Spread</td>
                                                <td>20 g</td>
                                                <td>55</td>
                                                <td>3.5</td>
                                                <td>4.5</td>
                                                <td>1.0</td>
                                                <td>160</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card mb-4">
                            <div class="card-header bg-info text-dark">
                                <h4 class="mb-0">Amul Paneer & Yogurt</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Product</th>
                                                <th>Serving Size</th>
                                                <th>Energy (kcal)</th>
                                                <th>Protein (g)</th>
                                                <th>Fat (g)</th>
                                                <th>Carbohydrates (g)</th>
                                                <th>Calcium (mg)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Amul Paneer</td>
                                                <td>100 g</td>
                                                <td>296</td>
                                                <td>20.0</td>
                                                <td>22.0</td>
                                                <td>3.7</td>
                                                <td>400</td>
                                            </tr>
                                            <tr>
                                                <td>Amul Malai Paneer</td>
                                                <td>100 g</td>
                                                <td>320</td>
                                                <td>18.0</td>
                                                <td>26.0</td>
                                                <td>3.5</td>
                                                <td>380</td>
                                            </tr>
                                            <tr>
                                                <td>Amul Masti Dahi (Yogurt)</td>
                                                <td>100 g</td>
                                                <td>70</td>
                                                <td>3.2</td>
                                                <td>3.0</td>
                                                <td>5.8</td>
                                                <td>120</td>
                                            </tr>
                                            <tr>
                                                <td>Amul Fruit Yogurt</td>
                                                <td>100 g</td>
                                                <td>98</td>
                                                <td>2.8</td>
                                                <td>3.0</td>
                                                <td>14.0</td>
                                                <td>100</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        <div class="alert alert-info">
                            <i class="bi bi-info-circle-fill me-2"></i> The nutritional values provided are approximate and may vary slightly. Please refer to product packaging for the most accurate information.
                        </div>
                    </div>
                    
                    <!-- Ice Cream Tab -->
                    <div class="tab-pane fade" id="ice-cream" role="tabpanel">
                        <div class="card mb-4">
                            <div class="card-header bg-primary text-white">
                                <h4 class="mb-0">Amul Ice Cream Cups</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Product</th>
                                                <th>Serving Size</th>
                                                <th>Energy (kcal)</th>
                                                <th>Protein (g)</th>
                                                <th>Fat (g)</th>
                                                <th>Carbohydrates (g)</th>
                                                <th>Sugar (g)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Vanilla Ice Cream</td>
                                                <td>100 ml</td>
                                                <td>190</td>
                                                <td>3.5</td>
                                                <td>10.0</td>
                                                <td>20.0</td>
                                                <td>16.0</td>
                                            </tr>
                                            <tr>
                                                <td>Chocolate Ice Cream</td>
                                                <td>100 ml</td>
                                                <td>210</td>
                                                <td>3.5</td>
                                                <td>11.0</td>
                                                <td>22.0</td>
                                                <td>18.0</td>
                                            </tr>
                                            <tr>
                                                <td>Butterscotch Ice Cream</td>
                                                <td>100 ml</td>
                                                <td>205</td>
                                                <td>3.5</td>
                                                <td>10.5</td>
                                                <td>21.5</td>
                                                <td>17.5</td>
                                            </tr>
                                            <tr>
                                                <td>Strawberry Ice Cream</td>
                                                <td>100 ml</td>
                                                <td>195</td>
                                                <td>3.2</td>
                                                <td>10.0</td>
                                                <td>21.0</td>
                                                <td>17.0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card mb-4">
                            <div class="card-header bg-warning text-dark">
                                <h4 class="mb-0">Amul Ice Cream Cones & Bars</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Product</th>
                                                <th>Serving Size</th>
                                                <th>Energy (kcal)</th>
                                                <th>Protein (g)</th>
                                                <th>Fat (g)</th>
                                                <th>Carbohydrates (g)</th>
                                                <th>Sugar (g)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Chocolate Cone</td>
                                                <td>120 ml</td>
                                                <td>245</td>
                                                <td>4.0</td>
                                                <td>12.0</td>
                                                <td>28.0</td>
                                                <td>20.0</td>
                                            </tr>
                                            <tr>
                                                <td>Butterscotch Cone</td>
                                                <td>120 ml</td>
                                                <td>240</td>
                                                <td>4.0</td>
                                                <td>11.5</td>
                                                <td>28.5</td>
                                                <td>21.0</td>
                                            </tr>
                                            <tr>
                                                <td>Tricone</td>
                                                <td>120 ml</td>
                                                <td>250</td>
                                                <td>4.2</td>
                                                <td>12.5</td>
                                                <td>29.0</td>
                                                <td>22.0</td>
                                            </tr>
                                            <tr>
                                                <td>Chocobar</td>
                                                <td>60 ml</td>
                                                <td>150</td>
                                                <td>2.0</td>
                                                <td>9.0</td>
                                                <td>15.0</td>
                                                <td>12.0</td>
                                            </tr>
                                            <tr>
                                                <td>Almond Bar</td>
                                                <td>75 ml</td>
                                                <td>180</td>
                                                <td>3.5</td>
                                                <td>11.0</td>
                                                <td>16.0</td>
                                                <td>12.5</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card mb-4">
                            <div class="card-header bg-success text-white">
                                <h4 class="mb-0">Amul Family Pack Ice Creams</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Product</th>
                                                <th>Serving Size</th>
                                                <th>Energy (kcal)</th>
                                                <th>Protein (g)</th>
                                                <th>Fat (g)</th>
                                                <th>Carbohydrates (g)</th>
                                                <th>Sugar (g)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Rajbhog Ice Cream</td>
                                                <td>100 ml</td>
                                                <td>215</td>
                                                <td>3.8</td>
                                                <td>11.0</td>
                                                <td>23.0</td>
                                                <td>19.0</td>
                                            </tr>
                                            <tr>
                                                <td>Kesar Pista Ice Cream</td>
                                                <td>100 ml</td>
                                                <td>220</td>
                                                <td>4.0</td>
                                                <td>12.0</td>
                                                <td>22.0</td>
                                                <td>18.0</td>
                                            </tr>
                                            <tr>
                                                <td>Chocolate Chip Ice Cream</td>
                                                <td>100 ml</td>
                                                <td>225</td>
                                                <td>3.5</td>
                                                <td>12.5</td>
                                                <td>23.0</td>
                                                <td>19.5</td>
                                            </tr>
                                            <tr>
                                                <td>Tutti Frutti Ice Cream</td>
                                                <td>100 ml</td>
                                                <td>210</td>
                                                <td>3.2</td>
                                                <td>10.0</td>
                                                <td>24.0</td>
                                                <td>20.0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        <div class="alert alert-info">
                            <i class="bi bi-info-circle-fill me-2"></i> The nutritional values provided are approximate and may vary slightly. Please refer to product packaging for the most accurate information.
                        </div>
                    </div>
                    
                    <!-- Beverages Tab -->
                    <div class="tab-pane fade" id="beverages" role="tabpanel">
                        <div class="card mb-4">
                            <div class="card-header bg-primary text-white">
                                <h4 class="mb-0">Amul Lassi & Chaas</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Product</th>
                                                <th>Serving Size</th>
                                                <th>Energy (kcal)</th>
                                                <th>Protein (g)</th>
                                                <th>Fat (g)</th>
                                                <th>Carbohydrates (g)</th>
                                                <th>Sugar (g)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Amul Lassi (Sweet)</td>
                                                <td>200 ml</td>
                                                <td>130</td>
                                                <td>3.5</td>
                                                <td>3.0</td>
                                                <td>21.0</td>
                                                <td>18.0</td>
                                            </tr>
                                            <tr>
                                                <td>Amul Mango Lassi</td>
                                                <td>200 ml</td>
                                                <td>145</td>
                                                <td>3.2</td>
                                                <td>3.0</td>
                                                <td>25.0</td>
                                                <td>22.0</td>
                                            </tr>
                                            <tr>
                                                <td>Amul Rose Lassi</td>
                                                <td>200 ml</td>
                                                <td>135</td>
                                                <td>3.2</td>
                                                <td>3.0</td>
                                                <td>22.0</td>
                                                <td>19.0</td>
                                            </tr>
                                            <tr>
                                                <td>Amul Chaas (Buttermilk)</td>
                                                <td>200 ml</td>
                                                <td>70</td>
                                                <td>3.0</td>
                                                <td>1.5</td>
                                                <td>10.0</td>
                                                <td>6.0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card mb-4">
                            <div class="card-header bg-warning text-dark">
                                <h4 class="mb-0">Amul Kool Flavored Milk</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Product</th>
                                                <th>Serving Size</th>
                                                <th>Energy (kcal)</th>
                                                <th>Protein (g)</th>
                                                <th>Fat (g)</th>
                                                <th>Carbohydrates (g)</th>
                                                <th>Sugar (g)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Amul Kool Chocolate</td>
                                                <td>200 ml</td>
                                                <td>170</td>
                                                <td>5.0</td>
                                                <td>6.0</td>
                                                <td>22.0</td>
                                                <td>18.0</td>
                                            </tr>
                                            <tr>
                                                <td>Amul Kool Cafe</td>
                                                <td>200 ml</td>
                                                <td>165</td>
                                                <td>5.0</td>
                                                <td>6.0</td>
                                                <td>20.0</td>
                                                <td>16.0</td>
                                            </tr>
                                            <tr>
                                                <td>Amul Kool Kesar</td>
                                                <td>200 ml</td>
                                                <td>160</td>
                                                <td>5.0</td>
                                                <td>6.0</td>
                                                <td>19.0</td>
                                                <td>15.0</td>
                                            </tr>
                                            <tr>
                                                <td>Amul Kool Elaichi</td>
                                                <td>200 ml</td>
                                                <td>160</td>
                                                <td>5.0</td>
                                                <td>6.0</td>
                                                <td>19.0</td>
                                                <td>15.0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        <div class="alert alert-info">
                            <i class="bi bi-info-circle-fill me-2"></i> The nutritional values provided are approximate and may vary slightly. Please refer to product packaging for the most accurate information.
                        </div>
                    </div>
                </div>
                
                <!-- Nutritional Info Disclaimer -->
                <div class="card bg-light mt-5">
                    <div class="card-body">
                        <h4 class="text-center mb-4"><i class="bi bi-shield-check"></i> Understanding Nutritional Information</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <h5><i class="bi bi-info-circle text-primary"></i> What Do These Values Mean?</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item bg-transparent"><strong>Energy:</strong> Measured in kilocalories (kcal), represents the amount of energy provided by the food.</li>
                                    <li class="list-group-item bg-transparent"><strong>Protein:</strong> Essential for building and repairing tissues in your body.</li>
                                    <li class="list-group-item bg-transparent"><strong>Fat:</strong> Provides energy and helps your body absorb certain vitamins.</li>
                                    <li class="list-group-item bg-transparent"><strong>Carbohydrates:</strong> Your body's main source of energy.</li>
                                    <li class="list-group-item bg-transparent"><strong>Sugar:</strong> A type of carbohydrate that gives food a sweet taste.</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h5><i class="bi bi-exclamation-triangle text-warning"></i> Important Notes</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item bg-transparent">The values provided are approximate and based on average calculations.</li>
                                    <li class="list-group-item bg-transparent">Individual products may vary slightly in nutritional content.</li>
                                    <li class="list-group-item bg-transparent">For the most accurate and up-to-date information, always refer to the product packaging.</li>
                                    <li class="list-group-item bg-transparent">If you have specific dietary concerns or allergies, please consult with a healthcare professional.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
