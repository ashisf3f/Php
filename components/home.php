<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
<!-- <div role="status" class=" absolute w-full mt-32 space-y-2.5 h-[100vh] animate-pulse max-w-full">
    <div class="flex items-center space-x-2 w-full">
        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-32"></div>
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24"></div>
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
    </div>
    <div class="flex items-center w-full space-x-2 max-w-full">
        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full"></div>
                <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24"></div>
    </div>
    <div class="flex items-center w-full space-x-2 max-w-full">
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-80"></div>
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
    </div>
    <div class="flex items-center w-full space-x-2 max-w-full">
        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full"></div>
                <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24"></div>
    </div>
    <div class="flex items-center w-full space-x-2 max-w-full">
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-32"></div>
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24"></div>
        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full"></div>
    </div>
    <div class="flex items-center w-full space-x-2 max-w-full">
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-80"></div>
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
    </div>
    <div class="flex items-center w-full space-x-2 max-w-full">
        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full"></div>
                <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24"></div>
    </div>
    <div class="flex items-center w-full space-x-2 max-w-full">
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-32"></div>
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24"></div>
        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full"></div>
    </div>
    <div class="flex items-center w-full space-x-2 max-w-full">
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-80"></div>
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
    </div>
    <div class="flex items-center w-full space-x-2 max-w-full">
        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full"></div>
                <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24"></div>
    </div>
    <div class="flex items-center w-full space-x-2 max-w-full">
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-32"></div>
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-24"></div>
        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-full"></div>
    </div>
    <div class="flex items-center w-full space-x-2 max-w-full">
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
        <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-80"></div>
        <div class="h-2.5 bg-gray-300 rounded-full dark:bg-gray-600 w-full"></div>
    </div>
    <span class="sr-only">Loading...</span>
    
<div role="status" class="p-4 max-w-sm rounded border border-gray-200 shadow animate-pulse md:p-6 dark:border-gray-700">
    <div class="flex justify-center items-center mb-4 h-48 bg-gray-300 rounded dark:bg-gray-700">
        <svg class="w-12 h-12 text-gray-200 dark:text-gray-600" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="currentColor" viewBox="0 0 640 512"><path d="M480 80C480 35.82 515.8 0 560 0C604.2 0 640 35.82 640 80C640 124.2 604.2 160 560 160C515.8 160 480 124.2 480 80zM0 456.1C0 445.6 2.964 435.3 8.551 426.4L225.3 81.01C231.9 70.42 243.5 64 256 64C268.5 64 280.1 70.42 286.8 81.01L412.7 281.7L460.9 202.7C464.1 196.1 472.2 192 480 192C487.8 192 495 196.1 499.1 202.7L631.1 419.1C636.9 428.6 640 439.7 640 450.9C640 484.6 612.6 512 578.9 512H55.91C25.03 512 .0006 486.1 .0006 456.1L0 456.1z"></path></svg>
    </div>
    <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-4"></div>
    <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 mb-2.5"></div>
    <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 mb-2.5"></div>
    <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
    <div class="flex items-center mt-4 space-x-3">
        <svg class="w-14 h-14 text-gray-200 dark:text-gray-700" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path></svg>
        <div>
            <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-32 mb-2"></div>
            <div class="w-48 h-2 bg-gray-200 rounded-full dark:bg-gray-700"></div>
        </div>
    </div>
    <span class="sr-only">Loading...</span>
</div>

</div> -->
<div id="about" class="text-white   w-full  h-[200vh]">
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis cupiditate sit, ea sequi officia delectus maxime maiores rerum eum pariatur, qui culpa facilis odit sint asperiores sed minus, illum voluptatibus. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem, nisi dolor modi aliquid quas iste ex optio dicta sunt tenetur vitae deserunt dolore soluta ab, fugiat sequi. Ad, rem mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptatum rem molestiae, dolore suscipit voluptates consequatur ducimus voluptas at aliquid repellat tempora tempore, unde quo veritatis. Quis eum a aliquam?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis cupiditate sit, ea sequi officia delectus maxime maiores rerum eum pariatur, qui culpa facilis odit sint asperiores sed minus, illum voluptatibus. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem, nisi dolor modi aliquid quas iste ex optio dicta sunt tenetur vitae deserunt dolore soluta ab, fugiat sequi. Ad, rem mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptatum rem molestiae, dolore suscipit voluptates consequatur ducimus voluptas at aliquid repellat tempora tempore, unde quo veritatis. Quis eum a aliquam?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis cupiditate sit, ea sequi officia delectus maxime maiores rerum eum pariatur, qui culpa facilis odit sint asperiores sed minus, illum voluptatibus. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem, nisi dolor modi aliquid quas iste ex optio dicta sunt tenetur vitae deserunt dolore soluta ab, fugiat sequi. Ad, rem mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptatum rem molestiae, dolore suscipit voluptates consequatur ducimus voluptas at aliquid repellat tempora tempore, unde quo veritatis. Quis eum a aliquam?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis cupiditate sit, ea sequi officia delectus maxime maiores rerum eum pariatur, qui culpa facilis odit sint asperiores sed minus, illum voluptatibus. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem, nisi dolor modi aliquid quas iste ex optio dicta sunt tenetur vitae deserunt dolore soluta ab, fugiat sequi. Ad, rem mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptatum rem molestiae, dolore suscipit voluptates consequatur ducimus voluptas at aliquid repellat tempora tempore, unde quo veritatis. Quis eum a aliquam?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis cupiditate sit, ea sequi officia delectus maxime maiores rerum eum pariatur, qui culpa facilis odit sint asperiores sed minus, illum voluptatibus. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem, nisi dolor modi aliquid quas iste ex optio dicta sunt tenetur vitae deserunt dolore soluta ab, fugiat sequi. Ad, rem mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptatum rem molestiae, dolore suscipit voluptates consequatur ducimus voluptas at aliquid repellat tempora tempore, unde quo veritatis. Quis eum a aliquam?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis cupiditate sit, ea sequi officia delectus maxime maiores rerum eum pariatur, qui culpa facilis odit sint asperiores sed minus, illum voluptatibus. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem, nisi dolor modi aliquid quas iste ex optio dicta sunt tenetur vitae deserunt dolore soluta ab, fugiat sequi. Ad, rem mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptatum rem molestiae, dolore suscipit voluptates consequatur ducimus voluptas at aliquid repellat tempora tempore, unde quo veritatis. Quis eum a aliquam?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis cupiditate sit, ea sequi officia delectus maxime maiores rerum eum pariatur, qui culpa facilis odit sint asperiores sed minus, illum voluptatibus. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem, nisi dolor modi aliquid quas iste ex optio dicta sunt tenetur vitae deserunt dolore soluta ab, fugiat sequi. Ad, rem mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptatum rem molestiae, dolore suscipit voluptates consequatur ducimus voluptas at aliquid repellat tempora tempore, unde quo veritatis. Quis eum a aliquam?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis cupiditate sit, ea sequi officia delectus maxime maiores rerum eum pariatur, qui culpa facilis odit sint asperiores sed minus, illum voluptatibus. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem, nisi dolor modi aliquid quas iste ex optio dicta sunt tenetur vitae deserunt dolore soluta ab, fugiat sequi. Ad, rem mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptatum rem molestiae, dolore suscipit voluptates consequatur ducimus voluptas at aliquid repellat tempora tempore, unde quo veritatis. Quis eum a aliquam?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis cupiditate sit, ea sequi officia delectus maxime maiores rerum eum pariatur, qui culpa facilis odit sint asperiores sed minus, illum voluptatibus. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem, nisi dolor modi aliquid quas iste ex optio dicta sunt tenetur vitae deserunt dolore soluta ab, fugiat sequi. Ad, rem mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptatum rem molestiae, dolore suscipit voluptates consequatur ducimus voluptas at aliquid repellat tempora tempore, unde quo veritatis. Quis eum a aliquam?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis cupiditate sit, ea sequi officia delectus maxime maiores rerum eum pariatur, qui culpa facilis odit sint asperiores sed minus, illum voluptatibus. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem, nisi dolor modi aliquid quas iste ex optio dicta sunt tenetur vitae deserunt dolore soluta ab, fugiat sequi. Ad, rem mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptatum rem molestiae, dolore suscipit voluptates consequatur ducimus voluptas at aliquid repellat tempora tempore, unde quo veritatis. Quis eum a aliquam?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis cupiditate sit, ea sequi officia delectus maxime maiores rerum eum pariatur, qui culpa facilis odit sint asperiores sed minus, illum voluptatibus. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem, nisi dolor modi aliquid quas iste ex optio dicta sunt tenetur vitae deserunt dolore soluta ab, fugiat sequi. Ad, rem mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptatum rem molestiae, dolore suscipit voluptates consequatur ducimus voluptas at aliquid repellat tempora tempore, unde quo veritatis. Quis eum a aliquam?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis cupiditate sit, ea sequi officia delectus maxime maiores rerum eum pariatur, qui culpa facilis odit sint asperiores sed minus, illum voluptatibus. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem, nisi dolor modi aliquid quas iste ex optio dicta sunt tenetur vitae deserunt dolore soluta ab, fugiat sequi. Ad, rem mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptatum rem molestiae, dolore suscipit voluptates consequatur ducimus voluptas at aliquid repellat tempora tempore, unde quo veritatis. Quis eum a aliquam?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis cupiditate sit, ea sequi officia delectus maxime maiores rerum eum pariatur, qui culpa facilis odit sint asperiores sed minus, illum voluptatibus. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem, nisi dolor modi aliquid quas iste ex optio dicta sunt tenetur vitae deserunt dolore soluta ab, fugiat sequi. Ad, rem mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptatum rem molestiae, dolore suscipit voluptates consequatur ducimus voluptas at aliquid repellat tempora tempore, unde quo veritatis. Quis eum a aliquam?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis cupiditate sit, ea sequi officia delectus maxime maiores rerum eum pariatur, qui culpa facilis odit sint asperiores sed minus, illum voluptatibus. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem, nisi dolor modi aliquid quas iste ex optio dicta sunt tenetur vitae deserunt dolore soluta ab, fugiat sequi. Ad, rem mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptatum rem molestiae, dolore suscipit voluptates consequatur ducimus voluptas at aliquid repellat tempora tempore, unde quo veritatis. Quis eum a aliquam?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis cupiditate sit, ea sequi officia delectus maxime maiores rerum eum pariatur, qui culpa facilis odit sint asperiores sed minus, illum voluptatibus. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem, nisi dolor modi aliquid quas iste ex optio dicta sunt tenetur vitae deserunt dolore soluta ab, fugiat sequi. Ad, rem mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptatum rem molestiae, dolore suscipit voluptates consequatur ducimus voluptas at aliquid repellat tempora tempore, unde quo veritatis. Quis eum a aliquam?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis cupiditate sit, ea sequi officia delectus maxime maiores rerum eum pariatur, qui culpa facilis odit sint asperiores sed minus, illum voluptatibus. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem, nisi dolor modi aliquid quas iste ex optio dicta sunt tenetur vitae deserunt dolore soluta ab, fugiat sequi. Ad, rem mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptatum rem molestiae, dolore suscipit voluptates consequatur ducimus voluptas at aliquid repellat tempora tempore, unde quo veritatis. Quis eum a aliquam?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis cupiditate sit, ea sequi officia delectus maxime maiores rerum eum pariatur, qui culpa facilis odit sint asperiores sed minus, illum voluptatibus. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem, nisi dolor modi aliquid quas iste ex optio dicta sunt tenetur vitae deserunt dolore soluta ab, fugiat sequi. Ad, rem mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptatum rem molestiae, dolore suscipit voluptates consequatur ducimus voluptas at aliquid repellat tempora tempore, unde quo veritatis. Quis eum a aliquam?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis cupiditate sit, ea sequi officia delectus maxime maiores rerum eum pariatur, qui culpa facilis odit sint asperiores sed minus, illum voluptatibus. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem, nisi dolor modi aliquid quas iste ex optio dicta sunt tenetur vitae deserunt dolore soluta ab, fugiat sequi. Ad, rem mollitia? Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure voluptatum rem molestiae, dolore suscipit voluptates consequatur ducimus voluptas at aliquid repellat tempora tempore, unde quo veritatis. Quis eum a aliquam?
</div>
</body>
</html>