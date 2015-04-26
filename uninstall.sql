-- add table prefix if you have one
DELETE FROM core_config_data WHERE path like 'pagespeed/%';
DELETE FROM core_resource WHERE code = 'pagespeed_setup';