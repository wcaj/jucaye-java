package com.jucaye.jucaye.controlles;

import com.jucaye.jucaye.dao.UsuarioDao;
import com.jucaye.jucaye.models.Usuario;
import de.mkammerer.argon2.Argon2;
import de.mkammerer.argon2.Argon2Factory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.*;


import java.util.List;


@RestController
public class UsuarioController {

    @Autowired
    private UsuarioDao usuarioDao;



    @RequestMapping(value = "usuarios/{id}", method = RequestMethod.DELETE)
    public void eliminar(@PathVariable long id) {
        usuarioDao.eliminar(id);


    }

    @RequestMapping(value = "usuarios/{id}", method = RequestMethod.GET)
    public List<Usuario> getUsuario(){
       return usuarioDao.getUsuarios();
    }


    @RequestMapping(value = "usuarios")
    public List<Usuario> getUsuarios(){
        return usuarioDao.getUsuarios();
    }


    @RequestMapping(value = "usuarios", method = RequestMethod.POST)
    public void registrarUsuario(@RequestBody Usuario usuario){

        Argon2 argon2 = Argon2Factory.create(Argon2Factory.Argon2Types.ARGON2id);
        String hash = argon2.hash(1,1024, 1, usuario.getClave());
        usuario.setClave(hash);

        usuarioDao.registrar(usuario);
    }


}
