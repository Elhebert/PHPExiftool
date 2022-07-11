<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SilentPhotography extends AbstractTagGroup
{

  protected string $id = 'Nikon:SilentPhotography';

  protected string $name = 'SilentPhotography';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Silent Photography',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Nikon::Main
       * line : 199911
       * type : ?
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Nikon::Main.Nikon:SilentPhotography',
      'desc' => [
        'en' => 'Silent Photography',
      ],
    ],
  ];

}
