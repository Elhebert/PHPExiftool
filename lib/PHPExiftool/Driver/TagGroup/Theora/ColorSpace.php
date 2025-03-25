<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Theora;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorSpace extends AbstractTagGroup
{

  protected string $id = 'Theora:ColorSpace';

  protected string $name = 'ColorSpace';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Theora::Identification
       * line : 394863
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Theora::Identification.Theora:ColorSpace',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
