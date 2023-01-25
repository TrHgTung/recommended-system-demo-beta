<h1>Thuật toán đề xuất: collaborative filtering (phương pháp lọc cộng tác)</h1>
<sub>Mã nguồn này là của TrHgTung và các thành viên trong nhóm cùng phát triển, những người không liên quan không được khai thác mã nguồn này (Cút)</sub>
<h1>___________________________________________________</h1>

<ins>To-do</ins>: cần xây dựng lại giao diện (front end) và Việt hóa giao diện

<ins>Yêu cầu đặt ra:</ins>
Chúng ta lấy giả thiết rằng CGV Cinema đang cần một hệ thống có thể tự động cập nhật các đề xuất các phim đáng để xem, bẳng cách tổng hợp và xử lí các rating (đánh giá bằng điểm) từ khách hàng của họ

- Bỏ qua các bước xây dựng một hệ thống đặt vé, xử lí thanh toán, cập nhật phía server. Thì chúng ta đang có một bộ dữ liệu thô gồm tên ng dùng của CGV (username), số điểm (rating) và các biến dữ liệu khác, từ các dữ liệu kể trên, ta phải sử dụng ít nhất 1 thuật toán có thể tự đôgnj xử lí và cập nhật các recommend phim cho những khách hàng mới có thể tham khảo phim mà họ sẽ bỏ tiền ra mua vé

- Sử dụng collaborative filtering (phương pháp lọc cộng tác), tham khảo: https://viblo.asia/p/xay-dung-mot-he-thong-goi-y-collaborative-filtering-de-dang-nhu-the-nao-GrLZDXv3Zk0

- Ngoài ra còn có các nguồn khác để tham khảo các học thuật đề xuất dữ liệu, cũng như thuậ toán lọc cộng tác này:
    + https://github.com/TrHgTung/recommender_system_with_Python/blob/master/003.%20recommender%20system%20basic%20with%20Python%20-%202%20Collaborative%20Filtering.ipynb (github@lsjsj92)
    + https://phamdinhkhanh.github.io/2019/11/04/Recommendation_Compound_Part1.html