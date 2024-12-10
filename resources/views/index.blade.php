<style>
    .mb-2{
        margin-bottom: 2rem;
    }
</style>
<form id="userForm">
    <input class="mb-2" type="text" name="name" placeholder="Name" required> <br>
    <input class="mb-2" type="email" name="email" placeholder="Email" required> <br>
    <input class="mb-2" type="text" name="phone" placeholder="Phone" required> <br>
    <textarea class="mb-2" name="description" placeholder="Description"></textarea> <br>
    <select class="mb-2" name="role_id" required>
        <option value="">Select Role</option>
    </select> <br>
    <input class="mb-2" type="file" name="profile_image"> <br>
    <button type="submit">Submit</button>
</form>

<table id="userTable">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Role</th>
            <th>Description</th>
            <th>Profile Image</th>
        </tr>
    </thead>
    <tbody>
        <!-- User data will be populated here dynamically -->
    </tbody>
</table>

<script src="{{url('resources/js/custom.js')}}"></script>
