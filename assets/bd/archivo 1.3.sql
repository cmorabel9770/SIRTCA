use phpmy1_enlacejuridico24h_com_co;

create procedure listado()
select id,email,usuario,estado,privilegio from users
;

create procedure eliminarUsuario(_id int)
delete from users where id = _id;


call listado()
