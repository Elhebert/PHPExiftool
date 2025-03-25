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
class ImageDataOffset extends AbstractTagGroup
{

  protected string $id = 'FLIR:ImageDataOffset';

  protected string $name = 'ImageDataOffset';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::FPF
       * line : 122442
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::FPF.FLIR:ImageDataOffset',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
