<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MOBI;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Alignment extends AbstractTagGroup
{

  protected string $id = 'MOBI:Alignment';

  protected string $name = 'Alignment';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Palm::EXTH
       * line : 273663
       * type : string
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Palm::EXTH.MOBI:Alignment',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
