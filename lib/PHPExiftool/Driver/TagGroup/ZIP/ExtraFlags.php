<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ZIP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ExtraFlags extends AbstractTagGroup
{

  protected string $id = 'ZIP:ExtraFlags';

  protected string $name = 'ExtraFlags';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : ZIP::GZIP
       * line : 414719
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'ZIP::GZIP.ZIP:ExtraFlags',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
