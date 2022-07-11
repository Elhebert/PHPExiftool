<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Flash;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class HTTPHostHeader extends AbstractTagGroup
{

  protected string $id = 'Flash:HTTPHostHeader';

  protected string $name = 'HTTPHostHeader';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'HTTP Host Header',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : Flash::Meta
       * line : 124476
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Flash::Meta.Flash:HTTPHostHeader',
      'desc' => [
        'en' => 'HTTP Host Header',
      ],
    ],
  ];

}
