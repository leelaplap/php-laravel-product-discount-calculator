<html>
<head>
    <title>Product Discount Calculator</title>
    <style>#content {
            width: 450px;
            margin: 0 auto;
            padding: 0px 20px 20px;
            background: white;
            border: 2px solid navy;
        }

        h1 {
            color: navy;
        }

        label {
            width: 10em;
            padding-right: 1em;
            float: left;
        }

        #data input {
            float: left;
            width: 15em;
            margin-bottom: .5em;
        }

        #buttons input {
            float: left;
            margin-bottom: .5em;
        }

        br {
            clear: left;
        }
    </style>
</head>
<body>
<div id="content">
    <h1>Product Discount Calculator</h1>
    <form method="POST" action="">
        @csrf
        <div id="data">
            <label>Product Description: <span>{{$description}}</span></label>
            <label>List Price: <span>{{$price}}</span></label>
            <label>Discount Percent: <span>{{$discount_percent}}</span></label>
            <label>discount_amount: <span>{{$discount_amount}}</span></label>
            <label>discount_price: <span>{{$discount_price}}</span></label>
        </div>
    </form>
</div>
</body>
</html>

