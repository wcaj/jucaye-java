package com.jucaye.jucaye.controlles;

import com.jucaye.jucaye.dao.UsusarioDao;
import com.jucaye.jucaye.models.Usuario;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.*;


import java.util.List;


@RestController
public class UsuarioController {

    @Autowired
    private UsusarioDao ususarioDao;



    @RequestMapping(value = "usuarios/{id}", method = RequestMethod.DELETE)
    public void eliminar(@PathVariable long id) {
        ususarioDao.eliminar(id);


    }

    @RequestMapping(value = "usuarios/{id}", method = RequestMethod.GET)
    public List<Usuario> getUsuario(){
       return ususarioDao.getUsuarios();
    }


    @RequestMapping(value = "usuarios")
    public List<Usuario> getUsuarios(){
        return ususarioDao.getUsuarios();
    }


    @RequestMapping(value = "usuarios", method = RequestMethod.POST)
    public void registrarUsuario(@RequestBody Usuario usuario){
        ususarioDao.registrar(usuario);
    }


}
