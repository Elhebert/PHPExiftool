<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DoNotShow extends AbstractTagGroup
{

  protected string $id = 'MNG:DoNotShow';

  protected string $name = 'DoNotShow';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : MNG::CloneObject
       * line : 164722
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::CloneObject.MNG:DoNotShow',
      'desc' => [
      ],
    ],
    1 => [
      /**
       * table_name : MNG::DefineObject
       * line : 164750
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MNG::DefineObject.MNG:DoNotShow',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
