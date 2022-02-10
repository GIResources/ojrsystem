SELECT  jobs.job_id, jobs.jobcategory, jobs.desiredjobposition, app_biodataform.firstname, app_biodataform.lastname, app_biodataform.phone, app_biodataform.email, qualifications.highestqualification, qualifications.discipline, career_workexperience.lastjobposition, app_passports.passport
FROM ((((jobs
INNER JOIN app_biodataform ON jobs.job_id = app_biodataform.job_id)
INNER JOIN qualifications ON jobs.job_id = qualifications.job_id) 
INNER JOIN career_workexperience ON jobs.job_id = career_workexperience.job_id)
INNER JOIN app_passports ON jobs.job_id = app_passports.job_id);