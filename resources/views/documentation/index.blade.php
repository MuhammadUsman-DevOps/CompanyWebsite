<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internal API Documentation</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans text-gray-800">

<header class="bg-white shadow sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold text-indigo-600">Internal API Documentation</h1>
        <input type="text" id="searchInput" placeholder="Search endpoints..." class="border rounded px-3 py-1">
    </div>
</header>

<main class="max-w-7xl mx-auto p-6 space-y-12">

    <!-- Info / Notes -->
    <section class="bg-white shadow rounded p-6">
        <h2 class="text-lg font-semibold mb-2">Notes</h2>
        <p class="text-gray-700">All requests must include the header:</p>
        <pre class="bg-gray-100 p-3 rounded"><code>Authorization: Bearer {INTERNAL_API_KEY}</code></pre>

    </section>

    <!-- API Endpoints -->
    <section class="space-y-8">

        <div class="api-endpoint bg-white shadow rounded p-6">
            <h3 class="text-indigo-600 font-semibold text-lg">GET /api/plans</h3>
            <p class="text-gray-700 mt-1">Get all plans by <code>product_id</code>.</p>

            <h4 class="font-semibold mt-3">Query Parameters:</h4>
            <table class="w-full text-left border-collapse mt-1">
                <thead>
                <tr class="bg-gray-100">
                    <th class="border px-3 py-1">Parameter</th>
                    <th class="border px-3 py-1">Type</th>
                    <th class="border px-3 py-1">Required</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="border px-3 py-1">product_id</td>
                    <td class="border px-3 py-1">int</td>
                    <td class="border px-3 py-1">Yes</td>
                </tr>
                </tbody>
            </table>

            <h4 class="font-semibold mt-3">Example Request:</h4>
            <pre class="bg-gray-100 p-3 rounded"><code>curl -X GET "https://yourdomain.com/api/plans?product_id=1" \
-H "Authorization: Bearer {INTERNAL_API_KEY}"</code></pre>

            <h4 class="font-semibold mt-3">Example Response:</h4>
            <pre class="bg-gray-100 p-3 rounded"><code>{
    "plans": [
        {
            "id": 1,
            "name": "Basic Plan",
            "price": 10,
            "interval": "monthly",
            "credits_per_cycle": 100
        },
        {
            "id": 2,
            "name": "Pro Plan",
            "price": 100,
            "interval": "yearly",
            "credits_per_cycle": 1200
        }
    ]
}</code></pre>
        </div>

        <div class="api-endpoint bg-white shadow rounded p-6">
            <h3 class="text-indigo-600 font-semibold text-lg">GET /api/verify-subscription</h3>
            <p class="text-gray-700 mt-1">Verify subscription for a customer and product.</p>

            <h4 class="font-semibold mt-3">Query Parameters:</h4>
            <table class="w-full text-left border-collapse mt-1">
                <thead>
                <tr class="bg-gray-100">
                    <th class="border px-3 py-1">Parameter</th>
                    <th class="border px-3 py-1">Type</th>
                    <th class="border px-3 py-1">Required</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="border px-3 py-1">email</td>
                    <td class="border px-3 py-1">string</td>
                    <td class="border px-3 py-1">Yes</td>
                </tr>
                <tr>
                    <td class="border px-3 py-1">product_id</td>
                    <td class="border px-3 py-1">int</td>
                    <td class="border px-3 py-1">Yes</td>
                </tr>
                </tbody>
            </table>

            <h4 class="font-semibold mt-3">Example Request:</h4>
            <pre class="bg-gray-100 p-3 rounded"><code>curl -X GET "https://yourdomain.com/api/verify-subscription?email=test@example.com&product_id=1" \
-H "Authorization: Bearer {INTERNAL_API_KEY}"</code></pre>

            <h4 class="font-semibold mt-3">Example Response:</h4>
            <pre class="bg-gray-100 p-3 rounded"><code>{
    "email": "test@example.com",
    "product_id": 1,
    "has_active_subscription": true,
    "subscription_valid_until": "2025-10-27T23:59:59"
}</code></pre>
        </div>

        <div class="api-endpoint bg-white shadow rounded p-6">
            <h3 class="text-indigo-600 font-semibold text-lg">POST /api/customers/add</h3>
            <p class="text-gray-700 mt-1">Add a customer and optionally create a user.</p>

            <h4 class="font-semibold mt-3">Body Parameters:</h4>
            <table class="w-full text-left border-collapse mt-1">
                <thead>
                <tr class="bg-gray-100">
                    <th class="border px-3 py-1">Field</th>
                    <th class="border px-3 py-1">Type</th>
                    <th class="border px-3 py-1">Required</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="border px-3 py-1">product_id</td>
                    <td class="border px-3 py-1">int</td>
                    <td class="border px-3 py-1">Yes</td>
                </tr>
                <tr>
                    <td class="border px-3 py-1">email</td>
                    <td class="border px-3 py-1">string</td>
                    <td class="border px-3 py-1">Yes</td>
                </tr>
                <tr>
                    <td class="border px-3 py-1">name</td>
                    <td class="border px-3 py-1">string</td>
                    <td class="border px-3 py-1">No</td>
                </tr>
                <tr>
                    <td class="border px-3 py-1">password</td>
                    <td class="border px-3 py-1">string</td>
                    <td class="border px-3 py-1">Required if create_user=true</td>
                </tr>
                <tr>
                    <td class="border px-3 py-1">create_user</td>
                    <td class="border px-3 py-1">boolean</td>
                    <td class="border px-3 py-1">No</td>
                </tr>
                </tbody>
            </table>

            <h4 class="font-semibold mt-3">Example Request:</h4>
            <pre class="bg-gray-100 p-3 rounded"><code>curl -X POST "https://yourdomain.com/api/customers/add" \
-H "Authorization: Bearer {INTERNAL_API_KEY}" \
-H "Content-Type: application/json" \
-d '{"product_id":1,"email":"test@example.com","name":"John Doe","password":"secret123","create_user":true}'</code></pre>

            <h4 class="font-semibold mt-3">Example Response:</h4>
            <pre class="bg-gray-100 p-3 rounded"><code>{
    "customer_id": 42,
    "product_id": 1,
    "subscription": {
        "id": 101,
        "plan_id": 2,
        "status": "active",
        "valid_until": "2025-11-27T23:59:59"
    }
}</code></pre>
        </div>

    </section>

    <!-- LOGIN -->
    <div class="api-endpoint bg-white shadow rounded p-6">
        <h3 class="text-green-600 font-semibold text-lg">POST /api/login</h3>
        <p class="text-gray-700 mt-1">Authenticate a user and return an API token (Sanctum token).</p>

        <h4 class="font-semibold mt-3">Body Parameters:</h4>
        <table class="w-full text-left border-collapse mt-1">
            <thead>
            <tr class="bg-gray-100">
                <th class="border px-3 py-1">Field</th>
                <th class="border px-3 py-1">Type</th>
                <th class="border px-3 py-1">Required</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="border px-3 py-1">email</td>
                <td class="border px-3 py-1">string</td>
                <td class="border px-3 py-1">Yes</td>
            </tr>
            <tr>
                <td class="border px-3 py-1">password</td>
                <td class="border px-3 py-1">string</td>
                <td class="border px-3 py-1">Yes</td>
            </tr>
            </tbody>
        </table>

        <h4 class="font-semibold mt-3">Example Request:</h4>
        <pre class="bg-gray-100 p-3 rounded"><code>curl -X POST "https://yourdomain.com/api/login" \
-H "Content-Type: application/json" \
-d '{"email":"test@example.com","password":"secret123"}'</code></pre>

        <h4 class="font-semibold mt-3">Example Response:</h4>
        <pre class="bg-gray-100 p-3 rounded"><code>{
    "token": "1|abcdefg1234567890",
    "token_type": "Bearer",
    "user": {
        "id": 42,
        "name": "John Doe",
        "email": "test@example.com"
    }
}</code></pre>
    </div>

    <!-- LOGOUT -->
    <div class="api-endpoint bg-white shadow rounded p-6">
        <h3 class="text-red-600 font-semibold text-lg">POST /api/logout</h3>
        <p class="text-gray-700 mt-1">Invalidate the current API token and log out the user.</p>

        <h4 class="font-semibold mt-3">Headers:</h4>
        <pre class="bg-gray-100 p-3 rounded"><code>Authorization: Bearer {SANCTUM_TOKEN}</code></pre>

        <h4 class="font-semibold mt-3">Example Request:</h4>
        <pre class="bg-gray-100 p-3 rounded"><code>curl -X POST "https://yourdomain.com/api/logout" \
-H "Authorization: Bearer 1|abcdefg1234567890"</code></pre>

        <h4 class="font-semibold mt-3">Example Response:</h4>
        <pre class="bg-gray-100 p-3 rounded"><code>{
    "message": "Logged out successfully."
}</code></pre>
    </div>

</main>

<script>
    const searchInput = document.getElementById('searchInput');
    const endpoints = document.querySelectorAll('.api-endpoint');

    searchInput.addEventListener('input', () => {
        const query = searchInput.value.toLowerCase();
        endpoints.forEach(ep => {
            const text = ep.innerText.toLowerCase();
            ep.style.display = text.includes(query) ? 'block' : 'none';
        });
    });
</script>

</body>
</html>
