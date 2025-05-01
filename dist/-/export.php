<?php

function all_urls($db) {
	$stmt = $db->query('SELECT u.url, u.custom_url, COUNT(s.url_id) as hits FROM '.DB_PREFIX.'urls u LEFT JOIN '.DB_PREFIX.'url_stats s ON u.id = s.url_id GROUP BY u.id,u.url ORDER BY u.id asc');
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}