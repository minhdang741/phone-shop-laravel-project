<!DOCTYPE html>
<html lang="zxx">
@include('layout/head')

<body>
    @include('layout/header')
    @include('layout/hero')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Login</h2>
                        <div class="breadcrumb__option">
                            <a href="/">Home</a>
                            <span>Login</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <div class="w3-container w3-card-2 w3-main w3-center" style="height:28.5%;">
        <div style="padding-top: 3%">
        <form action="" method="post">
        <div class="container">
            <input type="text" placeholder="Enter Username" name="uname" required
            style="padding: 12px 20px; margin: 8px 0px; width: 45%; border: 1px solid #f2f2f2;">
            <br>
            <input type="password" placeholder="Enter Password" name="psw" required
            style="padding: 12px 20px; margin: 8px 0px; width: 45%; border: 1px solid #f2f2f2;">
        </div>
        <div class="container">
            <a href="/signup"><button type="button" class="w3-text-white w3-blue" 
            style="padding: 12px 20px; margin: 8px 5px; width: 22%; border: 1px solid #2196F3;">Sign Up</button></a>
            <button type="submit" class="w3-text-white w3-green"
            style="padding: 12px 20px; margin: 8px 5px; width: 22%; border: 1px solid #4CAF50">Login</button>
        </div>
    </form>
        </div>
    </div>
    @include('layout/footer')
</body>

</html>