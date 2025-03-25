<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Isotherm1Color extends AbstractTagGroup
{

  protected string $id = 'FLIR:Isotherm1Color';

  protected string $name = 'Isotherm1Color';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::PaletteInfo
       * line : 123522
       * type : int8u
       * writable : false
       * count : 3
       * flags : 
       */
      'id' => 'FLIR::PaletteInfo.FLIR:Isotherm1Color',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 3;

}
