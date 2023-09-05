            var counter = 0;
                function addInput() {
                    var inputContainer = document.getElementById('inputContainer');
                    var inputWrapper = document.createElement('div');
                    inputWrapper.setAttribute('id','input-warpper'+counter)
                    let set_submit_btn = document.getElementById('btn-submit');
                    set_submit_btn.setAttribute('disabled','disabled');
                    inputWrapper.classList.add('input-wrapper');


                    var s_id = document.createElement('label');
                    s_id.setAttribute('class','form-label');
                    s_id.setAttribute('id','sid-input-la'+counter);
                    s_id.textContent = "รหัสนักศึกษา";
                    inputWrapper.appendChild(s_id);

                    var sid_input = document.createElement('input');
                    sid_input.setAttribute('type', 'text');
                    sid_input.setAttribute('class', 'form-control mb-3 col-6');
                    sid_input.setAttribute('id','sid-input-'+counter);
                    sid_input.setAttribute('name', 'sid_input_author[' + counter + ']');
                    inputWrapper.appendChild(sid_input);

                    let msgBox = document.createElement('div');
                    msgBox.setAttribute('id','msgBox'+counter);
                    inputWrapper.appendChild(msgBox);

                    var btn_checker_user = document.createElement('span');
                    btn_checker_user.setAttribute('class','btn btn-primary col-6 text-white');
                    btn_checker_user.setAttribute('id','btn-checker'+counter);
                    btn_checker_user.textContent = "ตรวจสอบ";
                    


                    let msgResult; // ย้ายตัวแปร msgResult ไปด้านนอกเพื่อให้สามารถเก็บค่าของอิลิเมนต์ข้อความได้ทุกครั้งที่คลิก

                btn_checker_user.onclick = function () {
                var sid_input = document.getElementById('sid-input-'+counter);
                if (sid_input) {
                    var sid_input_value = sid_input.value;
                    let msgBoxResult = document.getElementById('msgBox' + counter);
                    let set_submit_btn = document.getElementById('btn-submit' + counter);
            
                    // ... ส่วนอื่น ๆ ของโค้ดของคุณ ...

                    fetch('api/user-data-for-checker')
                     .then(response => {
                 if (!response.ok) {
                throw new Error('Network response was not ok');
                  }
                            return response.json();
                        })
                .then(data => {
                const s_id_data = data.s_id;
                const project_author_data = data.project_author;

            // ตรวจสอบความเปลี่ยนแปลงของ msgResult ก่อนสร้างข้อความใหม่
            if (msgResult) {
                msgBoxResult.removeChild(msgResult);
            }

            msgResult = document.createElement('p');

            const foundData = s_id_data.find(item => item.email === sid_input_value);
            console.log(s_id_data);

            if (foundData) {
                console.log(project_author_data);
                const found_project_author_id = project_author_data.includes(foundData.id.toString());
                console.log(foundData.id.toString());

                if (found_project_author_id) {
                    msgResult.setAttribute('class', 'text-danger');
                    msgResult.textContent = 'ผู้ใช้คนนี้มีโปรเจคแล้ว !';
                    set_submit_btn.setAttribute('disabled','disabled');
                    console.log('ผู้ใช้คนนี้มีโปรเจคแล้ว!');


                } else {

                    msgResult.setAttribute('class', 'text-success');
                    msgResult.textContent = 'สามารถเพิ่มรายชื่อได้ !';
                    set_submit_btn.removeAttribute('disabled');
                    console.log('เพิ่มรายชื่อได้');
                }
            } else {
                msgResult.setAttribute('class', 'text-danger');
                msgResult.textContent = 'ไม่พบรายชื่อในระบบ !';
                console.log('ไม่พบรายชื่อในระบบ');
            }

            msgBoxResult.appendChild(msgResult);

            // ... โค้ดอื่น ๆ ของคุณ ...
        })
        .catch(error => {
            console.log('fetch API error:', error);
        });
            
                } else {
                    console.error("ไม่พบอิลิเมนต์ที่มี ID 'sid-input-" + counter + "' ใน DOM.");
                }
               

                    
};




                    inputWrapper.appendChild(btn_checker_user);




                    var deleteButton = document.createElement('span');
                    deleteButton.setAttribute('class','btn btn-danger ms-2')
                    inputWrapper.appendChild(deleteButton);

                    deleteButton.textContent = 'ลบ';

                    deleteButton.onclick = function() {
                        set_submit_btn.removeAttribute('disabled');
                        inputWrapper.remove();
                    };
                    inputWrapper.appendChild(deleteButton);

                    inputContainer.appendChild(inputWrapper);
                    counter++;
                    }
