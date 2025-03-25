<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\H264;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FocalLengthIn35mmFormat extends AbstractTagGroup
{

  protected string $id = 'H264:FocalLengthIn35mmFormat';

  protected string $name = 'FocalLengthIn35mmFormat';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : H264::MDPM
       * line : 141193
       * type : rational32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'H264::MDPM.H264:FocalLengthIn35mmFormat',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
