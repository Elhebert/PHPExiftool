<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Microsoft;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RadioBand extends AbstractTagGroup
{

  protected string $id = 'Microsoft:RadioBand';

  protected string $name = 'RadioBand';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Microsoft::Xtra
       * line : 174755
       * type : ?
       * writable : false
       * count : 
       * flags : avoid
       */
      'id' => 'Microsoft::Xtra.Microsoft:RadioBand',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 1;

}
