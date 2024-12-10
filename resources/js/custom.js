var localurl = window.location.pathname;

document.getElementById('userForm').addEventListener('submit', async function (e) {
    e.preventDefault();

    if (!validateForm()) {
        return; 
    }

    const formData = new FormData(this);
    const response = await fetch(localurl + 'api/users', {
        method: 'POST',
        body: formData,
    });

    const data = await response.json();

    if (response.ok) {
        alert('User created successfully!');
        fetchUsers(); 
    } else {
        alert('Error: ' + JSON.stringify(data.errors));
    }
});

function validateForm() {
    const name = document.querySelector('[name="name"]').value.trim();
    const email = document.querySelector('[name="email"]').value.trim();
    const phone = document.querySelector('[name="phone"]').value.trim();

    if (name === '') {
        alert('Name is required.');
        return false;
    }

    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!emailPattern.test(email)) {
        alert('Please enter a valid email address.');
        return false;
    }

    const phonePattern = /^[6-9]\d{9}$/;
    if (!phonePattern.test(phone)) {
        alert('Please enter a valid 10-digit Indian phone number starting with 6, 7, 8, or 9.');
        return false;
    }

    return true; 
}

async function fetchUsers() {
    const response = await fetch(localurl + 'api/users');
    const { users } = await response.json();
    const tbody = document.getElementById('userTable').querySelector('tbody');
    tbody.innerHTML = '';

    users.forEach(user => {
        const row = `
            <tr>
                <td>${user.name}</td>
                <td>${user.email}</td>
                <td>${user.phone}</td>
                <td>${user.role.name}</td>
                <td>${user.description || 'N/A'}</td>
                <td>${user.profile_image ? `<img src="${localurl}public/storage/${user.profile_image}" alt="Profile" width="50">` : 'N/A'}</td>
            </tr>
        `;
        tbody.innerHTML += row;
    });
}

fetchUsers(); 


async function fetchRoles() {
    const response = await fetch(localurl + 'api/roles');
    const { roles } = await response.json();

    const roleSelect = document.querySelector('[name="role_id"]');
    roleSelect.innerHTML = '<option value="">Select Role</option>'; 
    roles.forEach(role => {
        const option = document.createElement('option');
        option.value = role.id;
        option.textContent = role.name;
        roleSelect.appendChild(option);
    });
}

fetchRoles();