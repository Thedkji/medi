
<link rel="stylesheet" href="./assets/css/trial-register.css">
<section class="trial-register container body">
    <form>
        <input type="text" placeholder="Họ và tên" required>
        <input type="text" placeholder="Số điện thoại" required>
        <input type="email" placeholder="Địa chỉ Email" required>
        <input type="text" placeholder="Địa chỉ" required>
        <input type="text" placeholder="Tên phòng khám / Bệnh Viện" required>
        <select required>
            <option disabled selected>Loại phòng khám</option>
            <option>Phòng khám đa khoa</option>
            <option>Phòng khám chuyên khoa</option>
        </select>
        <select required>
            <option disabled selected>Quy mô phòng khám</option>
            <option>Nhỏ</option>
            <option>Vừa</option>
            <option>Lớn</option>
        </select>
        <div class="submit-wrapper">
            <button type="submit">Gửi</button>
        </div>
    </form>

</section>