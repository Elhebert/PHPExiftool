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
class RecurrenceID extends AbstractTagGroup
{

  protected string $id = 'VCalendar:RecurrenceID';

  protected string $name = 'RecurrenceID';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : VCard::VCalendar
       * line : 395475
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'VCard::VCalendar.VCalendar:RecurrenceID',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
