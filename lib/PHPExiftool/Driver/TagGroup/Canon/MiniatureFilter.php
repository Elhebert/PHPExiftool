<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MiniatureFilter extends AbstractTagGroup
{

  protected string $id = 'Canon:MiniatureFilter';

  protected string $name = 'MiniatureFilter';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::FilterInfo
       * line : 63977
       * type : ?
       * writable : false
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::FilterInfo.Canon:MiniatureFilter',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 4;

}
