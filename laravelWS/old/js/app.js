// 228
fetch('http://127.0.0.1:8000/api/messages', {
  headers: {
    'Content-type': 'application/json'
  }
}).then(res => res.json())
  .then(data => {
    data.forEach(item => {
      document.getElementById('messages').innerHTML += `
      <li>
        ${item.body} <i>${item.created_at}</i>
      </li>
      `
    })
  })
