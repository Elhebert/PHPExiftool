<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\VCalendar;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Action extends AbstractTagGroup
{

  protected string $id = 'VCalendar:Action';

  protected string $name = 'Action';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Action',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : VCard::VCalendar
       * line : 395609
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'VCard::VCalendar.VCalendar:Action',
      'desc' => [
        'en' => 'Action',
      ],
    ],
  ];

}
