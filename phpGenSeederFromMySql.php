<?php
// converts mysql workbench "copy rows with names" format to php array

// replace with copied text
$text = "# id, job_no, sale_user_id, customer_account_store_id, bs_address, bs_sub_district, bs_district, bs_province, bs_zip_code, bs_phone, loc_address, loc_nearby, loc_lat_long, job_status, appointment_schedule_date, appointment_schedule_time, is_receive_doc_copy_id_card, is_receive_doc_copy_house_reg, is_receive_doc_company_certificate, is_receive_doc_por_20, is_receive_doc_trade_reg, is_receive_doc_consent_letter, require, ca_code, ca_bs_type_name, ca_is_copy_card_id_auth_sign, ca_is_copy_house_reg_auth_sign, ca_is_copy_company_cert_auth_sign, ca_is_copy_doc_por20_auth_sign, ca_is_copy_comercial_reg_1y, ca_is_copy_comercial_reg_less_1y, ca_is_copy_bank_passbook, ca_sold_group_product, ca_place_ownership_type, ca_place_type, ca_place_other_note, ca_place_size, ca_location_type, ca_product_in_store, ca_total_brand_in_store, ca_layout_in_store, ca_is_wholesaler_dist_channel, ca_is_retail_dist_channel, ca_is_online_dist_channel, ca_is_other_dist_channel, ca_specific_dist_channel, ca_customer_entering_store, ca_credibility_store, ca_staff_recommend, ca_is_sell_only_cash, ca_level, ca_credit_start, ca_credit_end, ca_credit_day, ca_by, note, total_point, start_job_at, end_job_at, created_at, created_by, updated_at, updated_by, job_type, came2see_store_date, is_cancel_sch, cancel_sch_reason, cancel_sch_datetime, cancel_sch_by, sale_accepted_job_date
'6', 'JOB000001', '13', '3', 'ซอยพหลโยธิน 40 พหลโยธิน ซอย 40. แขวงเสนานิคม จตุจักร 10900', NULL, NULL, NULL, NULL, NULL, 'ซอยพหลโยธิน 40 พหลโยธิน ซอย 40. แขวงเสนานิคม จตุจักร 10900', 'ใกล้ร้านเสริมสวยแม่จันทรา', '13.84404,100.58024', 'เสร็จสิ้น', NULL, NULL, '1', '1', '1', '0', '1', '1', 'ไม่รับใบกำกับภาษี', 'CR6506/00001', 'บริษัทจำกัด', '1', '1', '1', '0', '1', '0', '1', 'บิวตี้ / คอสเมติก', 'เป็นของผู้ประกอปการเอง', 'อาคารพาณิชย์', NULL, '2 คูหา(อาคารพาณิชย์)', 'ติดถนนใหญ่', 'เต็มพื้นที่', '1 - 15 แบรนด์', 'ดีมาก', '1', '1', '0', '0', NULL, 'มาก', 'มาก', NULL, '0', '3', '20001.00', '30000.00', '30', NULL, NULL, '84.00', '2022-06-06 14:54:35', '2022-06-07 21:50:44', '2022-06-06 14:42:40', '1', '2022-06-07 21:50:44', '13', NULL, NULL, '0', '', '0000-00-00 00:00:00', '1', NULL
'7', 'JOB000002', '11', '5', '191 หมู่ 1 ตำบล เชิงดอย อำเภอดอยสะเก็ด เชียงใหม่ 50220', NULL, NULL, NULL, NULL, NULL, '191 หมู่ 1 ตำบล เชิงดอย อำเภอดอยสะเก็ด เชียงใหม่ 50220', 'ใกล้อุทยาน', '18.87086,99.13420', 'เสร็จสิ้น', NULL, NULL, '1', '1', '1', '0', '1', '1', 'ไม่รับใบกำกับภาษี', 'CR6506/00002', 'บริษัทจำกัด', '1', '1', '1', '0', '1', '0', '1', 'ส่งออก (ชายแดน)', 'อื่นๆ', NULL, 'อยู่ในอุทยาน', 'บ้านมีหน้าร้าน', 'ใกล้แหล่งชุมชน', 'เต็มพื้นที่', '15 แบรนด์ขึ้นไป', 'ดีมาก', '0', '1', '1', '0', NULL, 'มาก', 'มาก', NULL, '1', '0', '0.00', '0.00', '0', NULL, NULL, '59.00', '2022-06-07 23:52:11', '2022-06-08 12:28:57', '2022-06-07 22:15:14', '1', '2022-06-08 12:28:57', '11', NULL, NULL, '0', '', '0000-00-00 00:00:00', '1', NULL
'8', 'JOB000003', '6', '6', '15 ถ. บางบอน 3 แขวง บางบอน เขตบางบอน กรุงเทพมหานคร 10150 ประเทศไทย', NULL, NULL, NULL, NULL, NULL, '15 ถ. บางบอน 3 แขวง บางบอน เขตบางบอน กรุงเทพมหานคร 10150 ประเทศไทย', 'ใกล้แสนสุขเพลส', '13.6695619,100.3847255', 'เสร็จสิ้น', NULL, NULL, '1', '1', '1', '0', '1', '1', 'เปิดบัญชีคู่', 'CR6506/00003', 'บริษัทจำกัด', '1', '1', '1', '0', '1', '0', '1', 'บิวตี้ / คอสเมติก', 'สัญญาเช่า', 'ล็อคในตลาด', NULL, 'ล็อคเช่าในตลาด', 'ใกล้ตลาด', 'เต็มพื้นที่', '15 แบรนด์ขึ้นไป', 'ดีมาก', '1', '1', '1', '0', NULL, 'มาก', 'มาก', NULL, '1', '2', '1.00', '20000.00', '30', NULL, NULL, '70.00', '2022-06-08 12:54:57', '2022-06-08 12:59:22', '2022-06-08 12:39:55', '1', '2022-06-08 12:59:22', '6', NULL, NULL, '0', '', '0000-00-00 00:00:00', '1', NULL
'14', 'JOB000004', '17', '7', '74 ม.5 ต ตำบล ตะเคียนทอง อำเภอกาญจนดิษฐ์ สุราษฎร์ธานี 84160 ประเทศไทย', NULL, NULL, NULL, NULL, NULL, '74 ม.5 ต ตำบล ตะเคียนทอง อำเภอกาญจนดิษฐ์ สุราษฎร์ธานี 84160 ประเทศไทย', 'ใกล้ร้านขายของชำที่ภา', '9.1845195,99.42614019999999', 'เสร็จสิ้น', NULL, NULL, '1', '1', '1', '0', '1', '1', 'รับใบกำกับภาษี', 'CR6506/00004', 'บริษัทจำกัด', '1', '1', '1', '0', '1', '0', '1', 'บิวตี้ / คอสเมติก', 'ออนไลน์', NULL, NULL, 'บ้านมีหน้าร้าน', 'ใกล้แหล่งชุมชน', 'ไม่เต็มพื้นที่', '1 - 15 แบรนด์', 'ดีมาก', '0', '1', '1', '0', NULL, 'ปานกลาง', 'พอใช้', NULL, '1', '0', '0.00', '0.00', '0', NULL, NULL, '51.00', '2022-06-08 13:19:32', '2022-06-08 13:21:07', '2022-06-08 13:13:03', '1', '2022-06-08 13:21:07', '17', NULL, NULL, '0', '', '0000-00-00 00:00:00', '1', NULL
'15', 'JOB000005', NULL, '8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'รอดำเนินการ', NULL, NULL, '0', '0', '0', '0', '0', '0', 'รับใบกำกับภาษี', NULL, NULL, '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '0.00', NULL, NULL, NULL, '0.00', NULL, NULL, '2022-06-08 14:20:01', '1', '2022-06-08 14:20:01', NULL, NULL, NULL, '0', '', '0000-00-00 00:00:00', '1', NULL";
$rows = explode("\n", $text);

$columns = getColumns($rows[0]);
unset($rows[0]);

echo "[<br>";

foreach ($rows as $row) {
    if (!$row) continue;
    $array = array_combine($columns, explode(', ', $row));
    echo "[";
    foreach ($array as $key => $value) {
        $key = trim($key);
        echo "'$key' => $value,<br>";
    }
    echo "],<br>";
}

echo "]<br>";

function getColumns($text)
{
    $text = str_replace('#', '', substr($text, 2));
    return explode(', ', $text);
}