<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XML;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CreateDate extends AbstractTagGroup
{

  protected string $id = 'XML:CreateDate';

  protected string $name = 'CreateDate';

  protected ?string $phpType = 'date';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : OOXML::Main
       * line : 249333
       * type : date
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'OOXML::Main.XML:CreateDate',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
