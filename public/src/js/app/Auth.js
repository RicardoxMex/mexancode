function getCookie(name) {
    const nameEQ = name + "=";
    const ca = document.cookie.split(';');
    for(let i = 0; i < ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) === ' ') c = c.substring(1, c.length);
      if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
  }
export function Auth() {
    return {
        status_code: 0,
        data: {
            username: '',
            password: '',
            csrf:''
        },
        validation: [],
        init() {

        },
        login(e) {
            console.log()
            var header = {
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN':getCookie('CSRF-TOKEN')
                },
                method: 'POST',
                body: JSON.stringify(this.data)
            }

            fetch('http://192.168.3.2/api/register', header)
                .then(data => {
                    this.status_code = data.status
                    return data.json()
                })
                .then((response) => {
                    if (this.status_code === 200) {
                        //window.location.href = "/";
                        // this.validation = [];
                    }
                    if (this.status_code === 401) {
                        Alpine.store('Toast').show('error', response.error);
                    }
                    if (this.status_code === 400) {
                        this.validation = response.error
                    }
                    console.log(this.status_code, response)
                }).catch((error) => {
                    console.error(this.status_code)
                });
        },
    }
}