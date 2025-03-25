<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MS_DOC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LastPrinted extends AbstractTagGroup
{

  protected string $id = 'MS-DOC:LastPrinted';

  protected string $name = 'LastPrinted';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : FlashPix::DOP
       * line : 124308
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FlashPix::DOP.MS-DOC:LastPrinted',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
