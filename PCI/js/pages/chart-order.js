// Đoạn mã JavaScript - sales-dashboard.js
import { ApexCharts } from 'apexcharts';
import { ApexLineChartDefault, ApexDonutChartDefault } from '../constant/chart.constant';

// Thiết lập chiều cao cho biểu đồ đường
ApexLineChartDefault.chart.height = '380px';

// Thiết lập option cho biểu đồ báo cáo doanh số bán hàng
const salesReportChartOption = {
    ...ApexLineChartDefault,
    series: [
        { name: 'Online Sales', data: [24, 33, 29, 36, 34, 43, 40, 47, 45, 48, 46, 55] },
        { name: 'Marketing Sales', data: [20, 26, 23, 24, 22, 29, 27, 36, 32, 35, 32, 38] },
    ],
    xaxis: { categories: ['01 Jan', '02 Jan', '03 Jan', '04 Jan', '05 Jan', '06 Jan', '07 Jan', '08 Jan', '09 Jan', '10 Jan', '11 Jan', '12 Jan'] },
    legend: { show: false },
};

// Hiển thị biểu đồ báo cáo doanh số bán hàng
new ApexCharts(document.querySelector("#sales-report-chart"), salesReportChartOption).render();

// Tuỳ chỉnh nhãn cho biểu đồ donut
ApexDonutChartDefault.plotOptions.pie.donut.labels.total.formatter = () => 'Sản phẩm đã bán';

// Thiết lập option cho biểu đồ donut theo danh mục
const categoriesChartOption = {
    chart: { ...ApexLineChartDefault, height: 300, type: 'donut' },
    ...ApexDonutChartDefault,
    series: require('./path/to/categories-data.php'), // Import dữ liệu từ file PHP
    labels: require('./path/to/labels-data.php'), // Import dữ liệu từ file PHP
};

// Hiển thị biểu đồ donut theo danh mục
new ApexCharts(document.querySelector("#categories-chart"), categoriesChartOption).render();

// Lấy ngày hiện tại và đặt giá trị cho ô nhập ngày
const newDate = new Date();
const formattedDate = formatDate(newDate);
const divElement = document.querySelector('#date-query-input');
divElement.setAttribute('value', formattedDate);

// Hàm định dạng ngày
function formatDate(date) {
    const year = date.getFullYear();
    const month = String(date.getMonth() + 1).padStart(2, '0');
    const day = String(date.getDate()).padStart(2, '0');
    return `${month}/${day}/${year}`;
}
