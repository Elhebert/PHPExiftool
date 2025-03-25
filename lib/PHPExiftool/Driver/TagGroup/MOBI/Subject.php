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
class Subject extends AbstractTagGroup
{

  protected string $id = 'MOBI:Subject';

  protected string $name = 'Subject';

  protected ?string $phpType = 'string';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Palm::EXTH
       * line : 273464
       * type : string
       * writable : false
       * count : 
       * flags : list
       */
      'id' => 'Palm::EXTH.MOBI:Subject',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 64;

}
