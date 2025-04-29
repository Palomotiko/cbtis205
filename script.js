function showForm(form) {
  document.getElementById('loginForm').classList.add('hidden');
  document.getElementById('registerForm').classList.add('hidden');
  document.getElementById(form + 'Form').classList.remove('hidden');
}
